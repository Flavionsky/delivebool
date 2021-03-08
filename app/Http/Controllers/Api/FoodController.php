<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Food;

use App\Http\Resources\FoodResource;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        
        return FoodResource::collection(Food::all());

    }
}
