<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'product_id',
        'rating',
        'author',
        'content',
        'photo_url_1',
        'order',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
