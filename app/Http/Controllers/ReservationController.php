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


 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::latest()->paginate(5);
        return view('reservation.index',compact('reservations')
    );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservations = Reservation::find($id);
        return view('reservation.show',compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)

    {
        $reservation->delete();
        toastr()->success('La réservation a bien été supprimer ','Réussi',["positionClass" => "toast-top-right"]);
        return back();
    }
    






}









