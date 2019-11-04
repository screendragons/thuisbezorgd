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

class Order
{
	public $consumable;
	public $totalQuantity = 0;
	public $totalPrice = 0;

	public function construct($oldCart)
	{
		if($oldCart) {
			$this->consumable = $oldCart->consumable;
			$this->totalQuantity = $oldCart->totalQuantity;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($consumable, $id)
	{
		$storedConsumable = [ 'quantity' => 0, 'price' => $consumable->price, 'consumable' => $consumable];
		if($this->consumable)
		{
			if(array_key_exists($id, $this->consumable))
			{
				$storedConsumable = $this->consumable[$id];
			}
			$storedConsumable['quantity']++;
			$storedConsumable['price'] = $consumable->price * $storedConsumable['quantity'];
			$this->consumable[$id] = $storedConsumable;
			$this->totalQuantity++;
			$this->totalPrice += $item->price;
		}
	}
}
