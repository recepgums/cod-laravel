<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'tag_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function tag()
    {
        return $this->belongsTo(Order::class);
    }
}
