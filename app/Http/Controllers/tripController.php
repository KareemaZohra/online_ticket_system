<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class tripController extends Controller
{
    //

    public function reservation(){
        $locations = location::all();

        return view('bookTrip', compact('locations'));
    }
}
