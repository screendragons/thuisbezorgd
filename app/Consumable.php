<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use DB;

class Consumables extends Model
{
	public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
