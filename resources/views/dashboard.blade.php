@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;margin-bottom: 50px">
                        <div class="card-body">
                            <h5 class="card-title">Sales Today</h5>
                            <p class="card-text">
                                ${{ $saleToday }}
                            </p>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;margin-bottom: 50px">
                    <div class="card-body">
                        <h5 class="card-title">Sales Yesterday</h5>
                        <p class="card-text">
                           ${{$saleYesterday}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;margin-bottom: 50px">
                    <div class="card-body">
                        <h5 class="card-title">Sales This Month</h5>
                        <p class="card-text">
                            ${{$saleThisMonth}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 18rem;margin-bottom: 50px">
                    <div class="card-body">
                        <h5 class="card-title">Sales Last Month</h5>
                        <p class="card-text">
                            ${{$saleLastMonth}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
