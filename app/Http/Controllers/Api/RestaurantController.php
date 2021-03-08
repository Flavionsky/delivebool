<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;

use App\Http\Resources\RestaurantResource;


class RestaurantController extends Controller
{
    public function index(){
        return RestaurantResource::collection(Restaurant::all());

    }
}
