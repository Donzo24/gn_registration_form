<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendRequest;
use Illuminate\Support\Str;
use Response;
use App\Mail\SendForm;
use Illuminate\Support\Facades\Mail;

class SendRequestController extends Controller
{
    public function save(Request $request)
    {

        $name = (string) Str::uuid();

        file_put_contents(public_path("$name.txt"), file_get_contents(public_path("gn.txt")));

        // $email = "donzoyoussouf@gmail.com";
        $email = "randy@psg.com";
        $organisation = "";

        $list_email = ["donzoyoussouf@gmail.com"];

        foreach ($request->all() as $key => $data) {

            $file = file_get_contents(public_path("$name.txt"));

            $data = $data ? $data:"";

            if($key == "ORGANIZATION_NAME") $organisation = $data;

            if($key == "CONTACT_EMAIL" OR $key == "TECHNICAL_EMAIL" OR $key == "TECHNICAL_REGISTRATION_MAIL") {
                if($data) $list_email[] = $data;
            }

            $replacement = "\__$key";
            $gn = preg_replace("#$replacement#", $data, $file);
            file_put_contents(public_path("$name.txt"), $gn);
        }

        $file = public_path("$name.txt");

        Mail::to($email)
        ->cc($list_email)
        ->send(new SendForm($file, $organisation));

        unlink($file);

        return back()->with("info", trans("Opération effectuée avec succès"));
    }
}
