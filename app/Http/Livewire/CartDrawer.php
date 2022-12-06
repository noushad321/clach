<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartDrawer extends Component
{
    protected $listeners = ['toggleCartBar' => 'openCartBar'];
    public $isToggle = false;
    public function openCartBar()
    {

        $this->isToggle = true;
    }

    public function closeCartBar()
    {
        $this->isToggle = false;
    }
    public function render()
    {
        return view('livewire.cart-drawer');
    }
}
