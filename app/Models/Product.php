<?php

namespace App\Models;

use App\Traits\HasMultimedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory, HasMultimedia;
    protected $fillable = ['name', 'slug', 'short_description', 'in_stock', 'reference_number', 'fk_sub_category_type_id'];
    public $timestamps = false;

    public function attributeValues(): BelongsToMany
    {
        return $this->belongsToMany(AttributeValues::class, 'product_attributes', 'fk_attribute_value_id', 'fk_product_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class, 'fk_product_id', 'id');
    }

    public function subCategoryType(): BelongsTo
    {
        return $this->belongsTo(SubCategoryType::class, 'fk_sub_category_type_id', 'id');
    }

}
