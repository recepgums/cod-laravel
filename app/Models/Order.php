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

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }

    public function getWhatsappMessage()
    {
        return "Merhaba " . $this->name . ", \n\nSiparişinizi aldık: \n\n"
    . $this->products . "\n\n Toplam: " . $this->total_price . "TL \n\n Siparişinizi onaylıyor musunuz?";
    }
}
