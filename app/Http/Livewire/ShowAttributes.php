<?php

namespace App\Http\Livewire;

use App\Models\AttributeValues;
use Livewire\Component;

class ShowAttributes extends Component
{
    public function render()
    {
        return view('livewire.show-attributes', [
            'attributeValues' => AttributeValues::all()
        ]);
    }

    public function delete(AttributeValues $attributeValues)
    {
        $attributeValues->delete();
    }
}
