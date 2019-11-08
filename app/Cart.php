<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // tutorial
    // public $consumable;
    // public $totalQuantity = 0;
    // public $totalPrice = 0;

    // public function construct($oldCart)
    // {
    // 	if($oldOCart) {
    // 		$this->consumable = $oldCart->consumable;
    // 		$this->totalQuantity = $oldCart->totalQuantity;
    // 		$this->totalPrice = $oldCart->totalPrice;
    // 	}
    // }

    // public function add($consumable, $id)
    // {
    // 	$storedConsumable = [ 'quantity' => 0, 'price' => $consumable->price, 'consumable' => $consumable];
    // 	if($this->consumable)
    // 	{
    // 		if(array_key_exists($id, $this->consumable))
    // 		{
    // 			$storedConsumable = $this->consumable[$id];
    // 		}
    // 		$storedConsumable['quantity']++;
    // 		$storedConsumable['price'] = $consumable->price * $storedConsumable['quantity'];
    // 		$this->consumable[$id] = $storedConsumable;
    // 		$this->totalQuantity++;
    // 		$this->totalPrice += $item->price;
    // 	}
    // }

    // public function reduceByOne($id)
    // {

    // }
}
