<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'CatalogController@catalog'); //route to product page
Route::get('product/{id}', 'CatalogController@viewProduct'); //route to view product page
Route::post('addToCart', ['middleware' => ['web', 'auth'], 'uses' => 'CatalogController@addToCart']); //route to process the add to cart
Route::get('shoping-cart', ['middleware' => ['web', 'auth'], 'uses' => 'CatalogController@viewCart']); //route to view shopping cart bag
Route::delete('shoping-cart/{id}', ['middleware' => ['web', 'auth'], 'uses' => 'CatalogController@removeProduct']);

Route::get('order-history', ['middleware' => ['web','auth'], 'uses' => 'CatalogController@OrderHistory']);
Route::post('checkout', ['middleware' => ['web','auth'], 'uses' => 'CatalogController@checkout']);
Route::get('payment/{id}', ['middleware' => ['web','auth'], 'uses' => 'CatalogController@makePayment']);
Route::post('payment/{id}', ['middleware' => ['web','auth'], 'uses' => 'CatalogController@storePayment']);
Route::get('receipt/{id}', ['middleware' => ['web','auth'], 'uses' => 'CatalogController@showReceipt']);


Route::get('pdf/invoice/{orderID}', ['middleware' => ['web', 'auth'], 'uses' => 'CatalogController@showInvoicePDF']);
Route::get('pdf/receipt/{orderID}', ['middleware' => ['web', 'auth'], 'uses' => 'CatalogController@showReceiptPDF']);

Route::get('contactme', 'CatalogController@contactme');

Route::group(['middleware' => ['web', 'auth', 'admin'], 'prefix' => 'admin'], function () {


    Route::resource('product', 'ProductController');
    Route::resource('customer', 'CustomerController');
    Route::resource('order', 'OrderController');
    Route::resource('product', 'ProductController');
    Route::resource('staff', 'StaffController');

});

Route::get('dashboard', 'AdminController@dashboard');
