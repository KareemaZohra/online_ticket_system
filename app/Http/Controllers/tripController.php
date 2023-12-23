<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use App\Models\trip;
use App\Models\seat_allocation;

class tripController extends Controller
{
    //

    public function reservation(){
        $locations = location::all();

        return view('bookTrip', compact('locations'));
    }

    public function booking(Request $request){
        $input = $request->all();

        $trip = new trip;
        $trip->location = $input['location'];
        $trip->trip_date = $input['trip_date'];
        $trip->save();

        $latest_trip = trip::latest()->first();

        $seat = new seat_allocation;
        $seat->seat_no = $input['seat_no'];
        $seat->trip_id = $latest_trip->id;
        $seat->save();

        return redirect()->back();

    }
}
