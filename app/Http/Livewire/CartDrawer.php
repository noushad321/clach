<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartDrawer extends Component
{
    protected $listeners = ['toggleCartBar'];
    public $isToggle = false;
    public function toggleCartBar()
    {
        $this->isToggle = true;
    }
    public function render()
    {
        return view('livewire.cart-drawer');
    }
}
