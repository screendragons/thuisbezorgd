<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Createrestaurants extends Model
{
    // protected $fillable = [
    //     'title',
    //     'KVK',
    //     'address',
    //     'zipcode',
    //     'city',
    //     'phone',
    //     'email',
    //     'photo',
    // ];

    //  protected $table = 'restaurants';

	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
class Restaurant {
    protected $table = "restaurants";
}