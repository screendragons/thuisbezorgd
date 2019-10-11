<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurants;

class Order extends Model
{
	public function Order()
	{
	    return $this->hasMany('App\User');
	}

	public function Restaurants()
	{
	    return $this->hasMany('App\Restaurants');
	}
	public function Consumables()
	{
	    return $this->belongsTo('App\Restaurants');
	}
	public function User()
	{
	    return $this->belongsTo('App\User');
	}
}
