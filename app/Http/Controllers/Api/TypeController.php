<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Type;

use App\Http\Resources\TypeResource;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){

        $types = Type::withCount(['restaurants'])->get();

    return TypeResource::collection($types);
    }

}
