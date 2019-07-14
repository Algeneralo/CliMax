<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoThumbnail extends Model
{
    protected $table = "video_thumbnail";
    protected $fillable = ["video_id", "thumbnail"];
}
