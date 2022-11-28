<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductItem extends Component
{
    public $product;
    public $keys;
    public $showModal=false;
    public function toggleModal()
    {
        ///dd("sdsd");
        //$this->showModal = true;
        $this->emit('showModal',$this->showModal);
    }
    public function mount($product,$keys)
    {
        $this->product = $product;
        $this->keys = $keys;
    }
    public function render()
    {
        return view('livewire.product-item');
    }
}
