<?php

namespace App\Http\Livewire;
use App\Facades\Cart;

use Livewire\Component;

class ProductItem extends Component
{
    public $product;
    public $keys;
    public $showModal=false;
    public $quantity;

    public function toggleModal()
    {
        ///dd("sdsd");
        //$this->showModal = true;
        $this->emit('showModal',$this->showModal);
    }

    public function addToCart($product)
    {
       
        //dd($product['id']);
        Cart::add($product['id'], $product['name'], $product['price'], $this->quantity);
        $this->emit('productAddedToCart');


    }
    public function mount($product,$keys)
    {
        $this->product = $product;
        $this->keys = $keys;
        $this->quantity = 1;

    }
    public function render()
    {
        return view('livewire.product-item');
    }
}
