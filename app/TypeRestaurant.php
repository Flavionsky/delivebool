<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRestaurant extends Model
{
    protected $table = 'type_restaurants';

    public function restaurants(){
        return $this->belongsToMany('App\Restaurant', 'restaurants_to_type_restaurants', 'type_id' , 'restaurant_id');
    }
}
