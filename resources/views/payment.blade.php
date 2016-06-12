@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Make Payment</h3>
                </div>
                <div class="panel-body">
                    <form action="{{url('payment', $order->id)}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputForCardNumber">Card Number</label>
                                    <input type="number" name="card_number" class="form-control" id="inputForCardNumber" placeholder="Card Number" required>
                                </div>
                            </div>
                            <div class="col-md-6 pull-right">
                                <img src="{{ asset('catalogue/images/mastercard.png') }}" class="img-responsive" style="max-width: 70px; width: auto; float: left; margin-right: 10px;">
                                <img src="{{ asset('catalogue/images/visa2.png') }}" class="img-responsive" style="max-width: 70px; width: auto; float: left; margin-right: 10px;">
                                <img src="{{ asset('catalogue/images/americanexpress.png') }}" class="img-responsive" style="max-width: 70px; width: auto; float: left;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputForBankName">Bank Name</label>
                            <input type="text" name="bank_name" class="form-control" id="inputForBankName" placeholder="Bank Name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputForBankName">Total To Pay</label>
                            <input type="text" class="form-control" id="inputForBankName" value="RM{{ $order->total }}" readonly>
                            <input type="hidden" name="total" class="form-control" value="{{ $order->total }}" readonly>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Proceed</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
