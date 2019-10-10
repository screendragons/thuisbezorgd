<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Createconsumables extends Model
{
	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
class Consumables {
    protected $table = "consumables";
}
