@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="/book" method="post">
                    @csrf
                    <select name="location" class="form-select" aria-label="Default select example">
                        <option selected>Select Location</option>
                        @foreach($locations as $location)
                            <option value="{{$location->location}}">{{$location->location}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="trip_date" class="form-label">Trip Date</label>
                        <input type="date" name="trip_date" class="form-control" id="trip_date">
                    </div>
                    <div class="mb-3">
                        <label for="seat_no" class="form-label">Seat Number</label>
                        <input type="number" name="seat_no" class="form-control" id="seat_no">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">Available seats Color : Blue</div>
                        <div class="col-md-6">Reserved seats color : Gray</div>
                    </div>
                    <br>
                    <div class="row">
                        @for($i = 1; $i<= 36; $i++)
                            @if(in_array($i, $reserved_seats->toArray()))
                                <div class="col-2">
                                    <div class="bus bus-reserved text-center">{{$i}}</div>
                                </div>
                            @else
                                <div class="col-2">
                                    <div class="bus text-center">{{$i}}</div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
