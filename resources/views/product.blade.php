@extends('layouts.home')

@section('content')
  <div  class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-sidebar">
          <h2>Category</h2>
          <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordian" href="#sony">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Sony
                  </a>
                </h4>
              </div>
              <div id="sony" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul>
                    <li><a href="{{ url('?brand=sony&type=Full+HD+3D+Projector') }}">Full HD 3D Projector</a></li>
                    <li><a href="{{ url('?brand=sony&type=Digital+Multimedia+Projector') }}">Digital Multimedia Projector</a></li>
                    <li><a href="{{ url('?brand=sony&type=PC+3D+Ready+Projector') }}">PC 3D Ready Projector</a></li>
                  </ul>
                </div>
              </div>
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordian" href="#optoma">
                    <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                    Optoma
                  </a>
                </h4>
              </div>
              <div id="optoma" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul>
                    <li><a href="{{ url('?brand=optoma&type=Full+HD+3D+Projector') }}">Full HD 3D Projector</a></li>
                    <li><a href="{{ url('?brand=optoma&type=Digital+Multimedia+Projector') }}">Digital Multimedia Projector</a></li>
                    <li><a href="{{ url('?brand=optoma&type=PC+3D+Ready+Projector') }}">PC 3D Ready Projector</a></li>
                  </ul>
                </div>
              </div>
            </div>
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
            <br>
            <a href="{{ url('product', $product->id) }}" class="btn btn-primary">View product details</a>
      </div>
    @endforeach
    <div style="clear: both;"></div>
    <div class="pull-right">
      {!! $products->appends(['category' => \Illuminate\Support\Facades\Input::get('category'), 'brand' => \Illuminate\Support\Facades\Input::get('brand')])->render() !!}
    </div>
  </div>
  </div>
</div>
@endsection
