@extends('layouts.app')

@section('content')
  <div  class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Sony</h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><a href="{{ url('?type=Full+HD+3D+Projector') }}">Full HD 3D Projector</a></li>
                  <li><a href="{{ url('?type=Digital+Multimedia+Projector') }}">Digital Multimedia Projector</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            @foreach($products as $product)
                <div class="col-md-4">
                <h2>{{ $product->product_name }}</h2>
                <a><img src="{{ asset('catalogue/images/product/'.$product->image) }} " class="img-responsive"></a> {{--asset tu access folder public--}}
                <p> RM {{ $product->price }}</p>
                <p> {{ $product->brand }}</p>
                <p>{{ $product->type }}</p>
          </div>
        @endforeach
        <div style="clear: both;"></div>
        <div class="pull-right">
          {!! $products->appends(['category' => \Illuminate\Support\Facades\Input::get('category')])->render() !!}
        </div>
        </div>

@endsection
