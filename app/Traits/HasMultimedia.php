<?php

namespace App\Traits;

use App\Models\Multimedia;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasMultimedia
{
    public function multimedia(): MorphToMany
    {
        return $this->morphToMany(Multimedia::class, 'multimediable');
    }
}
