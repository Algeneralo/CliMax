<?php

namespace App\Http\Traits;

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use \Intervention\Image\Facades\Image;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

trait UploadImageTrait
{

    protected function uploadImage(UploadedFile $image, $name = null, $optimize = true, $resize = [], $path = null)
    {
        //get the file desired name or set the original one with timestamp
        if ($name != null)
            $imageName = $name . "." . $image->getClientOriginalExtension();
        else
            $imageName = Carbon::now()->timestamp . "-" . $image->getClientOriginalName();
        //get file desired path or set it to public path
        $path = $path ?? 'assets/images/upload/';
        //if image need to resize
        if (!empty($resize)) {
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize($resize[0], $resize[1]);
            $image_resize->save($path . $imageName);
        } else
            $image->move($path, $imageName);
        if ($optimize)
            ImageOptimizer::optimize($path . $imageName);
        return $imageName;
    }

}