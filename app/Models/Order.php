<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
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
        'note',
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'order_tags', 'order_id', 'tag_id');
    }

    public function getWhatsappMessage()
    {
        return "Merhaba " . $this->name . ", \n\nSiparişinizi aldık: \n\n"
    . $this->products . "\n\n Toplam: " . $this->total_price . "TL \n\n Siparişinizi onaylıyor musunuz?";
    }

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = preg_replace('/\D/', '', $value);
    }

    public function getWhatsappPhoneAttribute()
    {
        $phone = $this->attributes['phone'];

        if (strpos($phone, '05') === 0) {
            $phone = '9' . $phone;
        }

        return $phone;
    }
}
