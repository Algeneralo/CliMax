<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\UploadImageTrait;

class SliderController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view("admin.slider.index", compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.slider.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSliderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSliderRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'), null, true, ["1920", "1280"]);
        $request->merge(['image' => $image]);
        $status = Slider::create($request->all());
        if ($status)
            return $this->successResponse(route("sliders.index"));
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view("admin.slider.edit", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        if ($request->hasFile('image_file')) {
            $image = $this->uploadImage($request->file('image_file'), $slider->image, true, ["1920", "1280"]);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $slider->update($request->only(['image', 'first_text', 'first_text_color', "first_text_color",
            "second_text", "second_text_color", "button_text", "button_link"]));
        if ($status)
            return $this->successResponse(route("sliders.index"), 'Updated Successfully');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slider $slider
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Slider $slider)
    {
        //remove image from storage
        if (file_exists(public_path('assets/images/upload/' . $slider->image)))
            @unlink(public_path("assets/images/upload/" . $slider->image));
        $status = $slider->delete();
        if ($status)
            return $this->successResponse(route("sliders.index"), 'Deleted Successfully');
        return $this->failResponse();
    }
}
