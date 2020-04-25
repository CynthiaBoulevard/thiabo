<?php

namespace App\Http\Controllers;

use App\Contact;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request,[

            'name' => 'required|alpha',
            'firstname' => 'required|alpha ',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->firstname = $request->firstname;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();


        toastr()->success('votre message a bien été envoyé ','Envoi réussi',
        ["positionClass" => "toast-top-right"]);
        return back();

    }

}
