<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use App\Consumable;

class Order extends Model
{
	public function order()
	{
	    return $this->hasMany('App\User');
	}

	public function restaurant()
	{
	    return $this->hasMany('App\Restaurant');
	}

	public function consumable()
	{
	    return $this->belongsTo('App\Consumable');
	}

	public function user()
	{
	    return $this->belongsTo('App\User');
	}

	protected $table = 'order';

}
