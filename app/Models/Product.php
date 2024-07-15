<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'old_price',
        'emoji_benefits',
        'content',
        'template',
        'settings',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
   /* public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }*/

    public function updateSetting($key,$value)
    {
        $settingArray = json_decode($this->settings,true);
        $settingArray[$key] = $value;

        $this->update(['settings' => json_encode($settingArray)]);
    }

    public function getSettings($key)
    {
        $settingArray = json_decode($this->settings, true);

        if ($settingArray) {
            return array_key_exists($key, $settingArray) ? $settingArray[$key] : null;
        }

        return null;
    }
}
