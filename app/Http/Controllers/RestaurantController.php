<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*

*da definire le validazioni per il ristorante

*use App\Http\Requests\RestaurantRequest;

*/

use App\Restaurant;
use App\TypeRestaurant;
use App\Food;
use App\Http\Requests\FoodFormRequest;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $restaurants = Restaurant::all();

        $userLogged = Auth::user();


        return view('restaurants.index', compact('restaurants', 'userLogged'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodFormRequest $request)
    {
        $data = $request->validated();

        $restaurant = Auth::user();

        $newFood = new Food;

        $newFood->restaurant_id = $restaurant->id;
        $newFood->name = $data['name'];
        $newFood->price = $data['price'];
        $newFood->description = $data['description'];
        $newFood->visibility = $data['visibility'];
        $newFood->kind_of_food = $data['kind_of_food'];
        
        if($request->file('image') != null){
            $newFood->image = $request->file('image')->storePublicly('images');
        }

        $newFood->save();

        return redirect()->route('restaurants.show', $restaurant);
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
        $food = Food::find($id);
        return view('restaurants.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodFormRequest $request, Restaurant $restaurant, $id)
    {

       
        $userLogged = Auth::user();
        if ($userLogged->id == $restaurant->id) {

            $data = $request->validated();

            $food = $restaurant->foods->find($id);

            $food->update([
                'name' => $data['name'],
                'price' => $data['price'],
                'image' => $request->file('image')->storePublicly('images'),
                'description' => $data['description'],
                'visibility' => $data['visibility'],
                'kind_of_food' => $data['kind_of_food'],
            ]);

            return view('restaurants.index', $restaurant);

        }
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
        $restaurant->id = Auth::user()->id;
        return view('restaurants.show', compact('restaurant'));
    }
}
