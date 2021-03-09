<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    protected $fillable = ['name'];

    public function restaurants(){
        return $this->belongsToMany('App\Restaurant', 'type_restaurant', 'type_id' , 'restaurant_id');
    }
}
