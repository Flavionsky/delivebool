<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;



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
    return view('welcomepage');
})->name('welcomepage');



 Route::get('/order', function () {
    return view('partials.takeorder');
});




Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/orders', function () {
    return view('layouts.orders');
});

Route::get('/foods', function () {
    return view('layouts.foods');
});

Route::get('/cart', function () {
    return view('partials.cart');
})->name('cart');

Route::get('/nuovo', function () {
    return view('partials.order2');
});

Route::get('/hosted', 'RestaurantController@checkout')->name('checkout');

Route::post('/checkout', 'OrderController@store')->name('success');

Auth::routes();

Route::resource('restaurants', 'RestaurantController');

Route::get('/dashboard', 'RestaurantController@login')->name('home');

Route::resource('foods', 'FoodController');

Route::get('/orders', 'OrderController@orders')->name('orders');
