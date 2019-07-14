<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successResponse($redirect, $message = null)
    {
        $message = $message ?? 'Created Successfully';
        return redirect($redirect)->with('success', $message);
    }

    /**
     * custom function for redirect if create or update instance fail
     *
     * @param null $message
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function failResponse($message = null)
    {
        $message = $message ?? 'Something went wrong';
        return redirect()->back()->with('error', $message);
    }
}
