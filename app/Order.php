<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Restaurant;
use App\Consumable;

class Order extends Model
{

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function restaurant()
        {
            return $this->belongsTo('App\Restaurant');
        }

    public function consumables()
    {
        return $this->belongsToMany('App\Consumable');
    }

    protected $table = 'order';

    // protected $fillable = [
    //     'name',
    // ];
}
