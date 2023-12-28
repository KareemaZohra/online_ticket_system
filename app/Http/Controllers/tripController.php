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

    public function getSeats(Request $request){
        $input = $request->all();
        $tripIds = trip::where('location',$input['location'])
            ->where('trip_date',$input['trip_date'])
            ->pluck('id');

        $reserved_seats = seat_allocation::whereIn('trip_id',$tripIds)
            ->pluck('seat_no');

        return view('availableSeats',compact('reserved_seats'));

    }

    public function booking(Request $request){
        $input = $request->all();

        $seat_no = $input['seat_no'];
        $checkIfExists = trip::whereHas('seats', function ($q) use ($seat_no){
            $q->where('seat_allocation.seat_no',$seat_no);
        })
            ->where('trip_date',$input['trip_date'])
            ->where('location',$input['location'])
            ->get();

        if(count($checkIfExists)>0){
            return "This seat is already reserved";
        }
        else{
            $trip = new trip;
            $trip->location = $input['location'];
            $trip->trip_date = $input['trip_date'];
            $trip->save();

            $latest_trip = trip::latest()->first();

            $seat = new seat_allocation;
            $seat->seat_no = $input['seat_no'];
            $seat->trip_id = $latest_trip->id;
            $seat->save();

            $reservation = trip::where('id',$latest_trip->id)->with('seats')->first();

           // dd($reservation);
            return view('success',compact('reservation'));
        }

    }
}
