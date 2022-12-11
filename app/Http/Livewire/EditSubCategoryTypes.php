<?php

namespace App\Http\Livewire;

use App\Models\Multimedia;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSubCategoryTypes extends Component
{
    use WithFileUploads;
    public SubCategoryType $subCategoryType;
    public $subCategory;
    public $bannerImage;
    public $image;

    protected $rules = [
        'subCategoryType.name' => 'required|string',
        'subCategoryType.description' => 'nullable|string',
        'subCategory' => 'required|numeric',
        'bannerImage' => 'image|max:1024',
        'image' => 'image|max:1024',
    ];

    public function mount($subCategoryType)
    {
        $this->subCategoryType = $subCategoryType;
        $this->subCategories = SubCategory::all();
        $this->subCategory = $this->subCategoryType->subCategory->id;
    }

    public function save()
    {
        $this->validate();
        $this->subCategoryType->slug = Str::slug($this->subCategoryType->name, '-');
        $this->subCategoryType->fk_sub_category_id = $this->subCategory;
        $this->subCategoryType->save();

        $filePath = ( 'uploads/') . date('Y/m');

        $file = $this->image;
        $extension = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $extension;
        $uploadPath = $file->storeAs($filePath, $fileName);
        $originalName = $file->getClientOriginalName();
        $media = new Multimedia();
        $media->name = $originalName;
        $media->source_path= $uploadPath;
        $media->order = 1;
        $this->subCategoryType->multimedia()->save($media);

        $file = $this->bannerImage;
        $extension = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $extension;
        $uploadPath = $file->storeAs($filePath, $fileName);
        $originalName = $file->getClientOriginalName();
        $media = new Multimedia();
        $media->name = $originalName;
        $media->source_path= $uploadPath;
        $media->order = 1;
        $this->subCategoryType->multimedia()->save($media);

        return redirect()->to('/sub-categories-types');
    }
    public function render()
    {
        return view('livewire.edit-sub-category-types');
    }
}
