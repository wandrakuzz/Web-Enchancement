@extends('layouts.app')

@section('content')
  
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <br><br>
                <a><img src="{{ asset('catalogue/images/product/'.$product->image) }} " class="img-thumbnail"></a> {{--asset tu access folder public--}}
            </div>
            <div class="col-md-8">
                <hr>
                <h3>{{ $product->product_name }}</h3>
                <p> Price: RM {{ $product->price }}</p>
                <p> Brand: {{ $product->brand }}</p>
                <p> Type: {{ $product->type }}</p>
                <br>
                <form action="{{ url('addToCart') }}" method="post">
                    {!! csrf_field() !!}
                    Quantity:<input type="number" name="quantity" min="1" max="10" value="1" required><br><br>
                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                </form>
            </div>
        </div>
    </div>
@endsection
