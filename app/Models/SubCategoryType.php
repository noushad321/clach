<?php

namespace App\Models;

use App\Traits\HasMultimedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategoryType extends Model
{
    use HasFactory, HasMultimedia;
    protected $table = 'sub_category_types';
    public $timestamps = false;

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class, 'fk_sub_category_id', 'id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'fk_sub_category_type_id', 'id');
    }
}
