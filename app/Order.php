<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use App\Consumable;

class Order extends Model
{
	public function user(){
        return $this->belongsTo('App\User');
    }

    public function restaurant()
        {
            return $this->belongsTo('App\Restaurant');
        }

    public function consumable()
    {
        return $this->belongsToMany('App\Consumable', 'consumable_order', 'order_id', 'consumable_id');
    }

	protected $table = 'order';
}
