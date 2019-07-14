<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreClientRequest;
use App\Http\Traits\UploadImageTrait;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    use UploadImageTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view("admin.clients.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.clients.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreClientRequest $request)
    {
        $image = $this->uploadImage($request->file('image_file'));
        $request->merge(['image' => $image]);

        $status = Client::create($request->all());
        if ($status)
            return $this->successResponse(route("clients.index"));
        return $this->failResponse();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Client $client)
    {
        //remove image from storage
        if (file_exists(public_path('assets/images/upload/' . $client->image)))
            @unlink(public_path("assets/images/upload/" . $client->image));
        $status = $client->delete();
        if ($status)
            return $this->successResponse(route("clients.index"), 'Deleted Successfully');
        return $this->failResponse();
    }
}
