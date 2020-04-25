<?php

namespace App\Http\Controllers;

use App\Reservation;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function sendMessage(Request $request)
    {
        $this->validate($request,[

            'name' => 'required|alpha',
            'firstname' => 'required|alpha ',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|alpha',
        ]);

        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->firstname = $request->firstname;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->message = $request->message;
        $reservation->save();


        toastr()->success('votre inscription a bien été envoyé ','Envoi réussi',
        ["positionClass" => "toast-top-right"]);
        return back();

    }
}
