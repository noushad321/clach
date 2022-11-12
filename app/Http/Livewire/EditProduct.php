<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class EditProduct extends Component
{
    public Product $product ;

    protected $rules = [
        'product.name' => 'required|string|min:6',
        'product.short_description' => 'required|string|min:6',
        'product.in_stock' => 'required|string|min:6',
        'product.reference_number' => 'required|string|min:6',
    ];

    public function mount()
    {
        $this->product = new Product();
    }

    public function save()
    {
        $this->validate();

        $this->product->name = time();

        $this->product->save();

        return redirect()->to('/user');
    }

    public function render()
    {
        return view('livewire.edit-product');
    }
}
