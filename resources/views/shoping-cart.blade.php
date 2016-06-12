@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart->orderDetail as $p)
                        <tr>
                            <td class="col-sm-8 col-md-6">
                                <div class="media">
                                    <a class="thumbnail pull-left" style="margin-right: 10px;" href="#"> <img class="media-object" src="{{ asset('products/'.$p->product->image) }}" style="width: 72px; height: 72px;"> </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{ $p->product->name }}</h4>
                                        <p>Item Number: {{ $p->product->product_num }}</p>
                                        {{--<span>Status: </span><span class="text-success"><strong>In Stock</strong></span>--}}
                                    </div>
                                </div></td>
                            <td class="col-sm-1 col-md-1" style="text-align: center">
                                <input type="number" class="form-control" id="exampleInputEmail1" value="{{ $p->quantity }}" readonly>
                            </td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>RM{{ number_format($p->product->price, 2, '.', ' ') }}</strong></td>
                            <td class="col-sm-1 col-md-1 text-center"><strong>RM{{ number_format($p->quantity * $p->product->price, 2, '.', ' ') }}</strong></td>
                            <td class="col-sm-1 col-md-1">
                                <form action="{{ url('shoping-cart', $p->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    {!! method_field('delete') !!}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Remove item from cart?')">
                                        <span class="glyphicon glyphicon-remove"></span> Remove
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>RM{{ number_format($subTotal, 2, '.', ' ') }}</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>GST (6%)</h5></td>
                        <td class="text-right"><h5><strong>RM{{ number_format($gst, 2, '.', ' ') }}</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td
                        <td><h3>Total To Pay</h3></td>
                        <td class="text-right"><h3><strong>RM{{ number_format($subTotal + $gst, 2, '.', ' ') }}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a href="{{ url('/')}}" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                            </a></td>
                        <td>
                          <form action="{{url('checkout')}}" method="post">
                            {!!csrf_field()!!}
                            <input type="hidden" name="total" value="{{ number_format($subTotal + $gst, 2,'.','')}}">
                            <button type="submit" class="btn btn-success">
                                Checkout <span class="glyphicon glyphicon-play"></span>
                            </button></td>
                          </form>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
