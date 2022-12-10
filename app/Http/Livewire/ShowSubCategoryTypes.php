<?php

namespace App\Http\Livewire;

use App\Models\SubCategory;
use App\Models\SubCategoryType;
use Livewire\Component;

class ShowSubCategoryTypes extends Component
{
    public function render()
    {
        return view('livewire.show-sub-category-types', [
            'subCategoryTypes' => SubCategoryType::all()
        ]);
    }

    public function delete(SubCategoryType $subCategoryType)
    {
        $subCategoryType->delete();
    }
}
