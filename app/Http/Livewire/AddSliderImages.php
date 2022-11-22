<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Multimedia;
use App\Models\Product;
use App\Models\SliderImages;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSliderImages extends Component
{

    use WithFileUploads;

    public SliderImages $sliderImage;
    public $photo;

    protected $rules = [
        'sliderImage.name' => 'required|string',
        'sliderImage.description' => 'string',
        'photo' => 'image|max:1024',
    ];

    public function mount()
    {
        $this->sliderImage = new SliderImages();

    }

    public function save()
    {
        $this->validate();

        $this->sliderImage->save();

        $filePath = ('uploads/') . date('Y/m');
        $file = $this->photo;
        $extension = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $extension;
        $uploadPath = $file->storeAs($filePath, $fileName);
        $originalName = $file->getClientOriginalName();
        $media = new Multimedia();
        $media->name = $originalName;
        $media->source_path = $uploadPath;
        $this->sliderImage->multimedia()->save($media);

        return redirect()->to('/slider-images');
    }


    public function render()
    {
        return view('livewire.add-slider-images');
    }
}
