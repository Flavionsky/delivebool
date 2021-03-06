<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Restaurant extends Authenticatable
{

    protected $table = 'restaurants';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','email_verified_at', 'password', 'remember_token', 'address', 'city' , 'p_iva' , 'types'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function types(){
        return $this->belongsToMany('App\TypeRestaurant', 'restaurants_to_type_restaurants', 'restaurant_id', 'type_id');
    }

    public function foods(){
        return $this->hasMany('App\Food', 'restaurant_id' , 'id'); 
    }
}
