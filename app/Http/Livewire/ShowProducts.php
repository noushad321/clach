<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowProducts extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.show-products', [
            'products' => Product::all()
        ]);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
