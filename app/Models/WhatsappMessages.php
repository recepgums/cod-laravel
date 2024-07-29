<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'key',
        'message',
        'phone',
        'status',
        'error_message',
        'send_at',
    ];
}
