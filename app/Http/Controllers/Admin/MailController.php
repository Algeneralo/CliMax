<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mails = Mail::orderBy('created_at', 'desc')->get();
        $unReadCount = Mail::where("is_read", false)->count();
        return view("admin.mails.index", compact('mails', 'unReadCount'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mail $mail)
    {
        $mail->is_read = 1;
        $mail->save();
        $unReadCount = Mail::where("is_read", false)->count();
        return view("admin.mails.show", compact('mail', 'unReadCount'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Mail $mail
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Mail $mail)
    {
        $mail->delete();
        return redirect()->route("mails.index");
    }

    public function replay($id)
    {
        $mail = Mail::findOrFail($id);
        $data = request('mail_replay');
        \Illuminate\Support\Facades\Mail::send([], [], function ($message) use ($data, $mail) {
            $message->from("info@climaxev.com");
            $message->to($mail->email);
            $message->subject("Re:" . Str::limit($mail->message, 20));
            $message->setBody($data, 'text/html');
        });
    }
}
