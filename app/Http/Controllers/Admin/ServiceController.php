<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view("admin.services.index", compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.services.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreServiceRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'));
        $request->merge(['image' => $image]);

        $status = Service::create($request->all());
        if ($status)
            return $this->successResponse(route("services.index"));
        return $this->failResponse();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view("admin.services.edit", compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateServiceRequest $request
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        if ($request->hasFile('image_file')) {
            $image = $this->uploadImage($request->file('image_file'), $service->image);
            //merge request with image variable to save it's name
            $request->merge(['image' => $image]);
        }
        $status = $service->update($request->only("image", "name", "details"));
        if ($status)
            return $this->successResponse(route("services.index"), 'Updated Successfully');
        return $this->failResponse();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Service $service)
    {
        //remove image from storage
        if (file_exists(public_path('assets/images/upload/' . $service->image)))
            @unlink(public_path("assets/images/upload/" . $service->image));
        $status = $service->delete();
        if ($status)
            return $this->successResponse(route("services.index"), 'Deleted Successfully');
        return $this->failResponse();
    }
}
