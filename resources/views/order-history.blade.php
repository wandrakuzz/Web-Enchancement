@extends('layouts.app')

@section('content')
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <td>No.</td>
        <td>Order Number</td>
        <td>Order Status</td>
        <td>Total</td>
        <td>Payment Status</td>
        <td>Created At</td>
      </thead>
      <tbody>
        @foreach($cart as $index => $order)
          <tr>
            <td>{{ $index+1}}</td>
            <td>{{ $order->order_num}}</td>
            <td>{{ ucwords($order->status)}}</td>
            <td>RM{{ $order->total}}</td>
            <td></td>
            <td>{{ $order->created_at->format('d/m/Y g:ia')}}</td>
          </tr>

        @endforeach
      </tbody>
    </table>
@endsection
