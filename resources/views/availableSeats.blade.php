@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
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
