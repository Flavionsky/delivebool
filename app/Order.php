<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function foods(){
        return $this->belongsToMany('App\Food', 'foods_to_orders', 'order_id' , 'food_id');
    }

    public function payment(){
        return $this->hasOne('App\Payment', 'order_id' ,'id');
    }
}
