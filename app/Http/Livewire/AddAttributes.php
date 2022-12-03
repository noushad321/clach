<?php

namespace App\Http\Livewire;

use App\Models\Attributes;
use App\Models\AttributeValues;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Livewire\Component;

class AddAttributes extends Component
{

    public AttributeValues $attributeValues;
    public $attribute;
    public $attributes = [];

    protected $rules = [
        'attributeValues.value' => 'required|string',
        'attribute' => 'sometimes | numeric',
    ];

    public function mount()
    {
        $this->attributeValues = new AttributeValues();
        $this->attributes = Attributes::all();
    }

    public function save()
    {
        $this->validate();
        $this->attributeValues->fk_attribute_id = $this->attribute;
        $this->attributeValues->save();
        return redirect()->to('/attributes');
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.add-attributes');
    }
}
