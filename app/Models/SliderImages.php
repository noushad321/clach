<?php

namespace App\Models;

use App\Traits\HasMultimedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImages extends Model
{
    use HasFactory, HasMultimedia;
    public $timestamps = false;
}
