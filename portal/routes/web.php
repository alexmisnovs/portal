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


Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/orders/edit/{id}', 'OrdersController@edit')->name('edit-order');

Route::post('/orders/get-uc-order', 'OrdersController@fetchOrderFromUC')->name('get-order');
Route::post('/orders/fetchOrder', 'OrdersController@fetchUCholdOrder')->name('fetch-order');
Route::post('/orders/update/{id}', 'OrdersController@update')->name('order-update');
Route::delete('/orders/delete/{id}', 'OrdersController@destroy')->name('delete-order');
Route::get('/orders/create', 'OrdersController@create')->name('order-create');
Route::post('/orders', 'OrdersController@store')->name('order-save');
Route::get('/orders/uc-api/{order_id?}', 'OrdersController@fetchUCOrder');


// searching
Route::get('/orders/search-get/{searchTerm?}', 'OrdersController@searchGet')->name('search-get');
Route::post('/orders/search/', 'OrdersController@search')->name('post-search');
Route::get('/orders/search/', 'OrdersController@search')->name('orders-search');


