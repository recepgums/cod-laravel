<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legacy extends Model
{
    public $timestamps = false;

    protected $fillable =[
        'key',
        'content',
        'title',
    ];
}
