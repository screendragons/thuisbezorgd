<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Consumable;
use App\Order;

class Restaurant extends Model
{
    protected $table = 'restaurant';

    protected $appends = ['is_open'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'name', 'KVK', 'address', 'zipcode', 'city',  'phone', 'email', 'is_open', 'is_closed'
    ];

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


}
