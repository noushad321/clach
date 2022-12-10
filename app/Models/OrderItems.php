<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderItems extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = false;

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product_id', 'id');
    }
}
