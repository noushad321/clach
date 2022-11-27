<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchButton extends Component
{
    public $showSearchForm = false;
    public function clickSearch()
    {
        $this->showSearchForm = true;
        $this->emit('toggleSearchForm');

    }
    public function render()
    {
        return view('livewire.search-button');
    }
}
