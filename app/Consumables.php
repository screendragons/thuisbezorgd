<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurants;
use DB;

class Consumables extends Model
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
