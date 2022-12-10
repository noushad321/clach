<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = false;

    public function items(): HasMany
    {
        return $this->hasMany(OrderItems::class, 'order_id', 'id');
    }
}
