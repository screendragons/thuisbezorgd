<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumables;

class Restaurants extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function consumables()
    {
        return $this->belongsTo('App\Consumables');
    }
}
