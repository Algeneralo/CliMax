<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\VideoThumbnail;
use \Lakshmaji\Thumbnail\Facade\Thumbnail;

class GalleryController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view("admin.gallery.index", compact("gallery"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        if ($request->ajax()) {
            //check if file type is video or image
            $fileName = request("type") == "video" ? $this->uploadImage($request->file('file'), null, false) :
                $this->uploadImage($request->file('file'));
            //create file record in gallery
            $status = Gallery::create(["file" => $fileName, "type" => request("type")]);
            if ($status) {
                //create video thumbnail
                if (request("type") == "video")
                    $this->createVideoThumbnail($status->id, $fileName);
                return response()->json("Success", 201);
            } else {
                return response()->json("Failed", 500);
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Gallery $gallery
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->delete())
            return $this->successResponse(route("gallery.index"), 'Deleted Successfully');
        return $this->failResponse();
    }

    private function createVideoThumbnail($videoID, $videoName)
    {
        $thumbnailName = explode(".", $videoName)[0] . "-thumbnail-.jpg";
        $status = Thumbnail::getThumbnail("assets/images/upload/" . $videoName, "assets/images/upload",
            $thumbnailName, 3);
        if ($status) {
            VideoThumbnail::create(["video_id" => $videoID, "thumbnail" => $thumbnailName]);
        }

    }
}
