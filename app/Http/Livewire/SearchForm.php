<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchForm extends Component
{
    public $search;
    public $showSearch = false;
    protected $listeners = ['toggleSearchForm'=> 'toggleSearchForm'];
    public function toggleSearchForm()
    {
        $this->showSearch = true;
    }
    public function searchResult()
    {
        if(strlen($this->search) > 2){
            return "dfdf";
        }
    }
    public function render()
    {
        return view('livewire.search-form');
    }
}
