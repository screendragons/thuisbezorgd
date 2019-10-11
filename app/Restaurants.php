<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumables;
use App\Order;

class Restaurants extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function consumables()
    {
        return $this->hasMany('App\Consumables');
    }
    public function order()
    {
        return $this->hasMany('App\Order');
    }

}
// class Restaurant {
//     protected $table = "restaurants";
// }
