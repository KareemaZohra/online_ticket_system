@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="/add-product" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" name="pname" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="qty">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
