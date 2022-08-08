<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendRequestController extends Controller
{
    public function save(Request $request)
    {
        dd($request->all());
    }
}
