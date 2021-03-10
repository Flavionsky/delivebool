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

Route::get('/hosted', function () {
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);

    $token = $gateway->ClientToken()->generate();

    return view('hosted', [
        'token' => $token
    ]);
})->name('checkout');

Route::post('/checkout', function (Request $request){
    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);

    $amount = $request->amount;
    $nonce = $request->payment_method_nonce;

    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'options' => [
            'submitForSettlement' => true
        ]
    ]);

    if ($result->success) {
        $transaction = $result->transaction;
        return back()->with('success_message', 'Transaction succesful. The ID is:'. $transaction->id);
    } else {
        $errorString = "";

        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }

        return back()->withErrors('An error occurred with the message: '.$result->message);
    }
});



Auth::routes();

Route::resource('restaurants', 'RestaurantController');

Route::get('/dashboard', 'RestaurantController@login')->name('home');

Route::resource('foods', 'FoodController');

// Route::get('/home', 'HomeController@index')->name('home');
