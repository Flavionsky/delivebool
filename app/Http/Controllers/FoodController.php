<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\TypeRestaurant;
use App\Food;
use App\Http\Requests\FoodFormRequest;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('foods.edit', compact('food'));
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
        $food = Food::find($id);
        if ($userLogged->id == $food->restaurant_id) {

            $data = $request->validated();


            $food->update([
                'name' => $data['name'],
                'price' => $data['price'],
                'description' => $data['description'],
                'visibility' => $data['visibility'],
                'kind_of_food' => $data['kind_of_food'],
            ]);
            $message = "Piatto modificato con successo";
            /* return redirect()->route('restaurants.index'); */
            return view("message", compact("message"));
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
        $food = Food::find($id);
       
        $food->delete();
        $message = "Piatto eliminato";
        return view("message", compact("message")); 

        
    }
}
