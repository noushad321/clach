<?php

namespace App\Http\Livewire;

use App\Models\Multimedia;
use App\Models\SliderImages;
use Livewire\Component;

class ShowSliderImages extends Component
{
    public function render()
    {
        return view('livewire.show-slider-images', [
            'images' => SliderImages::all()
        ]);
    }

    public function delete(SliderImages $image)
    {
        $image->delete();
    }
}
