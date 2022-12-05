<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeaderIcon extends Component
{

    public function toggleCartDrawer()
    {
        $this->emit('toggleCartBar');
    }
    public function render()
    {
        return view('livewire.header-icon');
    }
}
