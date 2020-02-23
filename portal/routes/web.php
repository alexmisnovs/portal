<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hey/{name}', function ($name){
    return "Hello ". $name;
});


Route::get('/postback/orders/{order_id?}', 'TicketsController@ucApiGetOrder');

Route::get('/zendesk/user/{user_email?}', 'TicketsController@findZendeskTicketByEmail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::post('/orders/get-uc-order', 'OrdersController@fetchOrderFromUC');

Route::get('/orders/uc-api/{order_id?}', 'OrdersController@fetchUCOrder');
