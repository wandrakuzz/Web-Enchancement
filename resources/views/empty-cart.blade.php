@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <h2 style="text-align: center">NO PRODUCT IN SHOPPING CART</h2>
                <br/><br/>
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

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>RM0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>GST (6%)</h5></td>
                        <td class="text-right"><h5><strong>RM0.00</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total To Pay</h3></td>
                        <td class="text-right"><h3><strong>RM0.00</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                            <a href="http://localhost:8008/product" class="btn btn-default">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shoppinm
                            </a></td>
                        <td>
                            <form action="http://localhost:8008/checkout" method="post">
                                <input type="hidden" name="_token" value="MmP6VkAeCRh6H9aZ7SCmqpRrROHaAgTG57l8K09x">
                                <input type="hidden" name="total" value="0.00">
                                <button type="submit" class="btn btn-success">
                                    Checkout <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
