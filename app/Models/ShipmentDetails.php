<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipmentDetails extends Model
{
    use HasFactory;
    protected $table = 'shipment_details';
    public $timestamps = false;
    protected $fillable = ['user_first_name', 'user_last_name', 'shipping_email','first_address', 'second_address', 'country_code', 'city_code', 'area', 'phone_no'];
}
