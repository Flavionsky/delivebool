<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Braintree;
/*

*da definire le validazioni per il ristorante

*use App\Http\Requests\RestaurantRequest;

*/

use App\Restaurant;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

use App\Food;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
    }

    public function index()
    {
        $restaurants = Restaurant::all();


        return view('restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant, $id)
    {
        $data = $request->all();

       $restaurant = Restaurant::find($id);

        $restaurant->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($data['password']),
            'remember_token' => Str::random(10),
            'address' => $data['address'],
            'city' => $data['city'],
            'p_iva' => $data['p_iva']
        ]);

        $restaurant->types()->sync($data['types']);

        return redirect()->route('restaurants.show', $restaurant);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Restaurant $restaurant)
    {
        $id = Auth::user()->id;

        $restaurant = Restaurant::find($id);

        return view('restaurants.show', compact('restaurant'));
    }
    public function checkout(Restaurant $restaurant, Request $request){

        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        $token = $gateway->ClientToken()->generate();

        return view('hosted', [
            'token' => $token,
            'total' => $request->input('total')
        ]);
    }
}
