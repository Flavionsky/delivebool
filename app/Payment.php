<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'status', 'order_id'
    ];

    public function order(){
        return $this->hasOne('App\Order', 'payment_id', 'id');
    }
}
