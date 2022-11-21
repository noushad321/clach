<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_category';
    public $timestamps = false;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'fk_category_id', 'id');
    }

    public function subCategoryTypes(): HasMany
    {
        return $this->hasMany(SubCategoryType::class, 'fk_sub_category_id', 'id');
    }

}
