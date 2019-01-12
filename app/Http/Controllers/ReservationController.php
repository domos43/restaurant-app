<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'how_many_people' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required'

        ]);
        $reservation = new Reservation();
        $reservation->first_name = $request->firstname;
        $reservation->last_name = $request->lastname;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->how_many_people = $request->howmanypeople;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();

        return redirect()->back();
    }
}
