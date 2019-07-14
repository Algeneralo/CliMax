<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
    protected $fillable = ["first_text", "first_text_color", "second_text",
        "second_text_color", "", "button_text", "button_link", "image"];
}
