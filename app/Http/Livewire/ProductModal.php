<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductModal extends Component
{
    public $visibleModal=false;
    protected $listeners = ['showModal'=> 'showModal'];

    public function showModal($show)
    {
        $this->visibleModal = $show;
    }
    public function render()
    {
        return view('livewire.product-modal');
    }
}
