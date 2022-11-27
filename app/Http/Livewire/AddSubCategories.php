<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class AddSubCategories extends Component
{
    public SubCategory $subCategory;
    public $category;

    protected $rules = [
        'subCategory.name' => 'required|string',
        'subCategory.description' => 'nullable|string',
        'category' => 'required|numeric'
    ];

    public function mount()
    {
        $this->subCategory = new SubCategory();
        $this->category = Category::all();
    }

    public function save()
    {
        $this->validate();
        $this->subCategory->fk_category_id = $this->category;
        $this->subCategory->slug = Str::slug($this->subCategory->name, '-');
        $this->subCategory->save();
        return redirect()->to('/sub-categories');
    }
    public function render()
    {
        return view('livewire.add-sub-categories');
    }
}
