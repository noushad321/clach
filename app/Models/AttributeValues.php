<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttributeValues extends Model
{
    use HasFactory;

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attributes::class, 'fk_attribute_id', 'id');
    }
}
