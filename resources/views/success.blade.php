@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p class="success">Your trip has been booked successfully!</p>
                <p>
                    Trip Date : {{ $reservation->trip_date }} <br>
                    Location : {{ $reservation->location }} <br>
                    Seat No : {{ $reservation->seats[0]->seat_no }}
                </p>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
