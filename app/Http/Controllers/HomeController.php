<?php

namespace App\Http\Controllers;

use App\TypeRestaurant;

use App\Food;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $categories = TypeRestaurant::all();

        $foods = Food::all();

        return view('home', compact('categories', 'foods'));
    }
}
