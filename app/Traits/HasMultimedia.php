<?php

namespace App\Traits;

use App\Models\Multimedia;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasMultimedia
{
    public function multimedia(): MorphMany
    {
        return $this->morphMany(Multimedia::class, 'multimediable');
    }
}
