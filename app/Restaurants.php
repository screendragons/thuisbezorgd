<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumables;
use App\Order;

class Restaurants extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Consumables()
    {
        return $this->hasMany('App\Consumables');
    }
    public function Order()
    {
        return $this->hasMany('App\Order');
    }

}
// class Restaurant {
//     protected $table = "restaurants";
// }
