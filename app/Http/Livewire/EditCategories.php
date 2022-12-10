<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Multimedia;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategories extends Component
{
    use WithFileUploads;
    public Category $category;
    public $bannerImage;

    protected $rules = [
        'category.name' => 'required|string',
        'category.description' => 'nullable|string',
        'bannerImage' => 'image|max:1024',
    ];

    public function mount($category)
    {
        $this->category = $category;

    }

    public function save()
    {
        $this->validate();
        $this->category->slug = Str::slug($this->category->name, '-');
        $this->category->save();

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
        $this->category->multimedia()->save($media);
        return redirect()->to('/categories');
    }
    public function render()
    {
        return view('livewire.edit-categories');
    }
}
