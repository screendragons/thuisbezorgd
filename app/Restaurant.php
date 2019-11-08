<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumable;
use App\Order;

class Restaurant extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function consumable()
    {
        return $this->hasMany('App\Consumable');
    }

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    protected $table = 'restaurant';

    protected $appends = ['is_open'];
    // public function getOpen
    // {
    //     if(date() > $this->open && date() < $this->close){
    //         return true;
    //     }

    //     return false;
    // }
}
