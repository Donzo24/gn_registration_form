<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendRequest;
use Illuminate\Support\Str;
use Response;

class SendRequestController extends Controller
{
    public function save(SendRequest $request)
    {

        $name = (string) Str::uuid();

        file_put_contents(public_path("$name.txt"), file_get_contents(public_path("gn.txt")));

        foreach ($request->all() as $key => $data) {

            $file = file_get_contents(public_path("$name.txt"));

            $data = $data ? $data:"";

            $replacement = "\__$key";
            $gn = preg_replace("#$replacement#", $data, $file);
            file_put_contents(public_path("$name.txt"), $gn);
        }

        $file = public_path("$name.txt");

        $headers = ['Content-Type: text/plain'];

        return \Response::download($file, 'gn.txt', $headers)->deleteFileAfterSend(true);
    }
}
