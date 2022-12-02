<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ShowProducts extends Component
{
    public function render(): Factory|View|Application
    {
        $products = Product::with('multimedia')->get();
//        foreach ($products as $product){
//            print_r(Storage::get($product->multimedia()->first()->getRawOriginal('source_path')));exit;
//
//        }
//        exit;
        return view('livewire.show-products', [
            'products' => $products
        ]);
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
