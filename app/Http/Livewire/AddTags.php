<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class AddTags extends Component
{
    public Tag $tag;

    protected $rules = [
        'tag.name' => 'required|string',
    ];

    public function mount()
    {
        $this->tag = new Tag();
    }

    public function save()
    {
        $this->validate();
        $this->tag->save();
        return redirect()->to('/tags');
    }
    public function render()
    {
        return view('livewire.add-tags');
    }
}
