<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Type;
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
        return view('foods.create');
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

        $id = Auth::user()->id;

        $restaurant = Restaurant::find($id);

        $categories = Type::all();

        $newFood = new Food;

        $newFood->restaurant_id = $restaurant->id;
        $newFood->name = $data['name'];
        $newFood->price = $data['price'];
        $newFood->description = $data['description'];
        $newFood->visibility = $data["visibility"];
        $newFood->kind_of_food = $data['kind_of_food'];


        if ($request->file('image') != null) {
            $newFood->image = $request->file('image')->storePublicly('images');
        }

        $newFood->save();

        return redirect()->route('home');
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
        $userLogged = Auth::user();

        $food = Food::find($id);

        $restaurant = $food->restaurant;

        if ($userLogged->id == $restaurant->id) {
            return view('foods.edit', compact('food'));
        } else {

            $errormessage = "L'Utente non è abilitato a modificare questo Cibo!";

            return view('error', compact('errormessage'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodFormRequest $request,Food $food)
    {
        
        $userLogged = Auth::user();
        
        $restaurant = Restaurant::find($food->restaurant->id);
        if($food->deleted == '0'){
            if ($userLogged->id == $restaurant->id) {
    
                $data = $request->validated();
                $food->name = $data['name'];
                $food->price = $data['price'];
                if ($request->hasfile('image')) {
                    $restaurant->image = $request->file('image')->storePublicly('images');
                    dd($restaurant->image);
                }
                $food->description = $data['description'];
                $food->visibility = $data["visibility"];
                $food->kind_of_food = $data['kind_of_food'];
    
    
                $food->save();
    
                return redirect()->route('home');
    
            } else {
    
                $errormessage = "L'Utente non è abilitato a modificare questo Cibo!";
    
                return view('error', compact('errormessage'));
            }
        } else {

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

        $food->deleted = '1';

        $food->save();

        return back();
    }
}
