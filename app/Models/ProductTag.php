<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductTag extends Model
{
    use HasFactory;
    protected $table = 'product_tags';
    public $timestamps = false;

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'fk_tag_id', 'id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'fk_product_id', 'id');
    }
}
