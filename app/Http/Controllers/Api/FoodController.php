<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Support\Collection;

use App\Food;

use App\Restaurant;

use App\Http\Resources\FoodResource;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){

        $food = FoodResource::collection(Food::all());


        return $food;



    }
}
