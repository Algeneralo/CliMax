<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    protected $fillable = ["file", "type"];

    public function videoThumbnail()
    {
        return $this->hasOne(\App\Models\VideoThumbnail::class, 'video_id')->withDefault();
    }
}