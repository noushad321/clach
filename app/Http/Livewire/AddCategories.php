<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class AddCategories extends Component
{
    public Category $category;

    protected $rules = [
        'category.name' => 'required|string',
        'category.description' => 'nullable|string',
    ];

    public function mount()
    {
        $this->category = new Category();
    }

    public function save()
    {
        $this->validate();
        $this->category->slug = Str::slug($this->category->name, '-');
        $this->category->save();
        return redirect()->to('/categories');
    }
    public function render()
    {
        return view('livewire.add-categories');
    }
}
