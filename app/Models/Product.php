<?php

namespace App\Models;

use App\Traits\HasMultimedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, HasMultimedia;

    public function attributeValues(): BelongsToMany
    {
        return $this->belongsToMany(AttributeValues::class, 'product_attributes', 'fk_attribute_value_id', 'fk_product_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class, 'fk_product', 'id');
    }

}
