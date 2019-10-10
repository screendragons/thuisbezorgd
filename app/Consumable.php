<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurants;
use DB;

class Consumable extends Model
{
	public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function restaurants()
    {
        return $this->belongsTo('App\Restaurants');
    }
}
class Consumables {
    protected $table = "consumables";
}
