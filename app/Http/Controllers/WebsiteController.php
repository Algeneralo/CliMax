<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Config;
use App\Models\Gallery;
use App\Models\Mail;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $services = Service::orderBy('created_at', 'desc')->get()->take(4);
        $clients = Client::all();
        return view("website.home", compact("slider", "services", "clients"));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        return view("website.gallery", compact('gallery'));
    }

    public function about()
    {
        $clients = Client::all();
        return view("website.about", compact('clients'));
    }

    public function contactUs(Request $request)
    {
        if ($request->post()) {
            $request->validate([
                "name" => "required",
                "email" => "required|email|regex:/(.*)@myemail\.com/i",
                "message" => "required",
            ]);
            $status = Mail::create($request->all());
            if ($status)
                return redirect()->back()->with("success", "Mail Sent Successfully");
        }
        return view('website.contact-us');
    }

    public function services()
    {
        $services = Service::orderBy('details', 'desc')->get();
        return view("website.services", compact("services"));
    }

}
