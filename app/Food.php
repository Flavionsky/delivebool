<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable = [
        'name', 'price','description', 'image', 'visibility', 'kind_of_food', 'restaurant_id'
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }

    public function orders(){
        return $this->belongsToMany('App\Order', 'food_order', 'food_id' , 'order_id');
    }
}
