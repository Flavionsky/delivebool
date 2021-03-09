<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*

*da definire le validazioni per il ristorante

*use App\Http\Requests\RestaurantRequest;

*/

use App\Restaurant;
use App\Type;
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
    public function store(Request $request)
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

            return view('restaurants.show', $restaurant);

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
        $id = Auth::user()->id;

        $restaurant = Restaurant::find($id);

        return view('restaurants.show', compact('restaurant'));
    }
}
