<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::first();
        return view("admin.home", compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreConfigRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreConfigRequest $request)
    {
        $status = Config::create($request->all());
        if ($status)
            return $this->successResponse("/admin");
        return $this->failResponse();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateConfigRequest $request
     * @param Config $config
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateConfigRequest $request, Config $config)
    {
        $status = $config->update($request->only(["facebook", "twitter", "instagram", "map_link",
            "phone", "telephone", "email", "message"]));
        if ($status)
            return $this->successResponse("/admin", "Updated Successfully");
        return $this->failResponse();
    }
}
