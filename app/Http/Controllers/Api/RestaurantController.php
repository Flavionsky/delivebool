<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Restaurant;

use App\Http\Resources\RestaurantResource;


class RestaurantController extends Controller
{
    public function filter()
    {   

        $attributes = request()->input('typesClick');

        $restaurants = Restaurant::whereHas('types', function ($query)
        use ($attributes) {
            $query->whereIn('type_id', $attributes);
        }, "=", count($attributes))->get();

        return RestaurantResource::collection($restaurants);
    }
    public function restaurants(){


       return RestaurantResource::collection(Restaurant::all());
    }
}
