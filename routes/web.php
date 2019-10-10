<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// create a restaurant
Route::resource('createrestaurants', 'CreaterestaurantsController');

// restaurants page
// Route::resource('restaurants', 'RestaurantsController');
// Route::post('/restaurant/{id}', 'RestaurantController@store')->name('restaurant.store');
Route::get('/restaurants', 'RestaurantsController@index')->name('restaurant');

Route::resource('restaurants/{restaurants_id}/consumables', 'ConsumableController');

// Create a consumable
Route::resource('createconsumables', 'CreateconsumablesController');

// Consumables
Route::resource('consumables', 'ConsumableController');

Route::resource('editconsumables', 'EditconsumableController');

Route::resource('/profile', 'ProfileController');

Route::resource('editprofile', 'EditprofileController');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
