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
        'ref_url',
        'barcode',
    ];

    const DISTRICT_DETECTION_WORDS = [
        ' mah', ' MAH', ' mh', 'MH',
        'mahallesi', 'mahalle'
    ];

    const STATUS = [
        "00" => "Kabul Bekliyor",
        "01" => "Kabul Edildi",
        "10" => "Teslim Edildi",
        "20" => "İade - İade Süreci Başlatıldı",
        "21" => "İade - Göndericiye İade Edildi",
        "22" => "İade - Kurye İade Sürecini Başlattı",
        "23" => "İade - İade Çıkış Şubesine Ulaştı",
        "24" => "İade - Şubeden İade Süreci Başlatıldı",
        "30" => "Teslim Edilemedi - Tekrar Dağıtım Planlanında",
        "40" => "Transfer Sürecinde",
        "41" => "Teslimat Şubesinde",
        "42" => "Kurye Dağıtımda",
        "50" => "Teslim Edilemedi",
        "60" => "Teslim Edilemedi - Teslimat Şubesinde",
    ];


    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'fest_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class, 'neighborhood_id', 'fest_id');
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

    public static function addressContainsDistrictWord($address)
    {
        foreach (self::DISTRICT_DETECTION_WORDS as $word) {
            if ($word != 0 && stripos($address, $word) !== false) {
                return true;
            }
        }
        return false;
    }
}
