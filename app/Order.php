<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function foods(){
        return $this->belongsToMany('App\Food', 'food_order', 'order_id' , 'food_id');
    }

    public function payment(){
        return $this->belongsTo('App\Payment');
    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
}
