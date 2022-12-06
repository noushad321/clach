<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryType;
use Illuminate\Support\Facades\Route;

use Livewire\Component;

class Products extends Component
{
    public $products;
    public $currentRouteName;

    public function mount()
    {
        $this->currentRouteName = Route::getCurrentRoute()->parameters();
        $category = $this->currentRouteName['category'];
        $sub_category = $this->currentRouteName['subCategory'];
        $sub_category_type = $this->currentRouteName['subCategoryType'];
        if ($category != "") {

            $category = (new Category)->where('slug', $category)->first();
            $this->products = Product::with('multimedia', 'attributeValues.attribute', 'tags')->where('fk_category_id', $category->id)->get();
        } else if ($sub_category != "") {
            $Subcategory = (new SubCategory)->where('slug', $sub_category)->first();
            $this->products  = Product::with('multimedia', 'attributeValues.attribute', 'tags')->where('fk_sub_category_id', $Subcategory->id)->get();
        } else if ($sub_category_type != "") {
            $subCategoryType = (new SubCategoryType)->where('slug', $sub_category_type)->first();
            $this->products  = Product::with('multimedia', 'attributeValues.attribute', 'tags')->where('fk_sub_category_type_id', $subCategoryType->id)->get();
        }
    }
    public function render()
    {

        return view('livewire.products');
    }
}
