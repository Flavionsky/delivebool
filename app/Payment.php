<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
