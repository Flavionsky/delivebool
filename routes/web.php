<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

Route::get('/foot', function () {
    return view('partials.footer');
}); /* da togliere */

Route::get('/main', function () {
    return view('partials.main');
});/* da togliere */

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

Route::get('/orders', function () {
    return view('layouts.orders');
});

Route::get('/foods', function () {
    return view('layouts.foods');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('restaurants', 'RestaurantController');
Route::resource('foods', 'FoodController');
