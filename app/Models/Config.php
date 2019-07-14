<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "config";
    protected $fillable = ['facebook', 'twitter', 'instagram', 'phone',
        'telephone', 'email', 'map_link', 'message'];

    public function getLatitudeAttribute()
    {
        preg_match('/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/', "{$this->map_link}", $link);
        return $link[1];
    }

    public function getLongitudeAttribute()
    {
        preg_match('/@(\-?[0-9]+\.[0-9]+),(\-?[0-9]+\.[0-9]+)/', "{$this->map_link}", $link);
        return $link[2];

    }
}
