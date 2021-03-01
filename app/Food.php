<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }

    public function orders(){
        return $this->belongsToMany('App\Order', 'foods_to_orders', 'food_id' , 'order_id');
    }
}
