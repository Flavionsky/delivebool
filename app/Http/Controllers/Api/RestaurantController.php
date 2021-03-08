<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;

use App\Http\Resources\RestaurantResource;


class RestaurantController extends Controller
{
    public function restaurants()
    {
        $restaurants = Restaurant::whereHas('types', function($query){
            return $query->where('type_id', request()->input('typesClick'));
        })->get();

        return RestaurantResource::collection($restaurants);
    }
}