@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td>Product Name</td>
                        <td>Product Quantity</td>
                        <td>Product Price</td>
                    </tr>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->itemName}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
