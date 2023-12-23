@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                <span>Price : {{ $product->price }}</span> <br>
                                <span>Quantity : {{ $product->quantity }}</span>
                            </p>
                            <form action="/buy" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <button type="submit" class="btn btn-primary">Buy now</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
