<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Livewire\Component;

class ShowTags extends Component
{
    public function render()
    {
        return view('livewire.show-tags', [
            'tags' => Tag::all()
        ]);
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
    }

}
