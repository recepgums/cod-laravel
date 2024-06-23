<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city_id',
        'district_id',
        'neighborhood_id',
        'address',
        'products',
        'total_price',
        'is_done',
    ];
}
