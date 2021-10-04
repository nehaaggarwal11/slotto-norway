<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Game extends Model implements HasMedia
{
    use HasMediaTrait;

    public $table = 'games';

    protected $appends = [
        // 'slug',
        'route',
        'logo',
        'bg_image',
        'bg_image_logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'bg_image_text',
        'bg_image_button_text',
        'bg_image_button_link',
        'logo_alt_text',
        'bg_image_alt_text',
        'bg_image_logo_alt_text',
        'game_link',
        'name',
        'slug',
        'rtp_game',
        'layout',
        'gevinstlinjer',
        'maks_mynt_gevinst',
        'volatilitet_game',
        'min_innsats',
        'maks_innsats',
        'description',
        'provider',
        'rtp',
        'gpi',
        'seo_title',
        'seo_keyword',
        'seo_description',
        'volatilitet',
        'created_at',
        'updated_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(188)->height(188);
    }

    /* public function getSlugAttribute()
    {
        return Str::slug($this->name);
    } */

    public function getRouteAttribute()
    {
        return $this->slug? route('frontend.game', $this->slug): url('404');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function getBgImageAttribute()
    {
        $file = $this->getMedia('bg_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function getBgImageLogoAttribute()
    {
        $file = $this->getMedia('bg_image_logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

}
