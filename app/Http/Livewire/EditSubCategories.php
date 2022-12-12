<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Multimedia;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSubCategories extends Component
{
    use WithFileUploads;
    public SubCategory $subCategory;
    public $category;
    public $categories = [];
    public $bannerImage;

    protected $rules = [
        'subCategory.name' => 'required|string',
        'subCategory.description' => 'nullable|string',
        'category' => 'required|numeric',
        'bannerImage' => 'image|max:1024',
    ];

    public function mount($subCategory)
    {
        $this->subCategory = $subCategory;
        $this->categories = Category::all();
        $this->category = $this->subCategory->category->id;
    }

    public function save()
    {
        $this->validate();
        $this->subCategory->fk_category_id = $this->category;
        $this->subCategory->slug = Str::slug($this->subCategory->name, '-');
        $this->subCategory->save();

        $filePath = ( 'uploads/') . date('Y/m');

        $file = $this->bannerImage;
        $extension = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $extension;
        $uploadPath = $file->storeAs($filePath, $fileName);
        $originalName = $file->getClientOriginalName();
        $media = new Multimedia();
        $media->name = $originalName;
        $media->source_path= $uploadPath;
        $media->order = 1;
        $this->subCategory->multimedia()->save($media);
        return redirect()->to('/sub-categories');
    }

    public function render()
    {
        return view('livewire.edit-sub-categories');
    }
}
