<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function districts()
    {
        return $this->hasMany(District::class, 'district_id', 'fest_id');
    }

    public function neighborhoods()
    {
        return $this->hasMany(Neighborhood::class,'neighborhood_id', 'fest_id');
    }
}
