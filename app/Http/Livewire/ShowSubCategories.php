<?php

namespace App\Http\Livewire;

use App\Models\SubCategory;
use Livewire\Component;

class ShowSubCategories extends Component
{
    public function render()
    {
        return view('livewire.show-sub-categories', [
            'subCategories' => SubCategory::all()
        ]);
    }

    public function delete(SubCategory $subCategory)
    {
        $subCategory->delete();
    }
}
