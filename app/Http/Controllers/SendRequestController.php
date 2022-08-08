<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendRequest;

class SendRequestController extends Controller
{
    public function save(SendRequest $request)
    {

        file_put_contents(public_path("form.txt"), file_get_contents(public_path("gn.txt")));

        foreach ($request->all() as $key => $data) {

            $file = file_get_contents(public_path("form.txt"));

            $replacement = "\__$key";
            $gn = preg_replace("#$replacement#", $data, $file);
            file_put_contents(public_path("form.txt"), $gn);
        }

        $file = public_path("form.txt");

        $headers = ['Content-Type: text/plain'];

        return \Response::download($file, 'gn.txt', $headers);
    }
}
