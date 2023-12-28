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
                    <button type="submit" class="btn btn-primary" formaction="/get-seats">Check Available Seats</button>
                    <div class="mb-3">
                        <label for="seat_no" class="form-label">Seat Number</label>
                        <input type="number" name="seat_no" class="form-control" id="seat_no">
                    </div>

                    <button type="submit" class="btn btn-primary" formaction="/book">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
