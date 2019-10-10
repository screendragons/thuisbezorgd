<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumable;

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
}
// class Restaurant {
//     protected $table = "restaurants";
// }
