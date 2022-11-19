<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attributes extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    public $timestamps = false;

    public function values(): HasMany
    {
        return $this->hasMany(AttributeValues::class, 'fk_attribute_id', 'id');
    }
}
