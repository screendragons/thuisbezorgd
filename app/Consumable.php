<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Restaurants;
use DB;

class Consumable extends Model
{
     public function restaurants()
    {
        return $this->belongsTo('App\Restaurants');
    }
}
