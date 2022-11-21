<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public $timestamps = false;

    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'fk_category_id', 'id');
    }
}
