<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\TypeRestaurant;

use App\Http\Resources\TypeResource;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){

        return TypeResource::collection(TypeRestaurant::all());
    }

}
