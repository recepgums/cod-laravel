<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'fest_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'fest_id',
        'name',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class,'neighborhood_id', 'fest_id');
    }
}
