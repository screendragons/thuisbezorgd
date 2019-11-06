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

//searchbar
Route::get('search', ['as' => 'search', 'uses' => 'RestaurantController@search']);

// restaurants page
Route::resource('restaurant', 'RestaurantController');
// Route::post('/restaurant/{id}', 'RestaurantController@store')->name('restaurant.store');

Route::resource('restaurant/{restaurant_id}/consumable', 'ConsumableController');

// Consumables
Route::resource('consumable', 'ConsumableController');

Route::get('consumable', 'ConsumableController');

// tutorial
Route::get('/consumable/{id}', [ 'as' => 'consumable.order', 'uses' => 'ConsumableController@order']);

//Profile
Route::resource('profile', 'ProfileController');

//Order
Route::resource('order', 'OrderController');

// Route::resource('/order/{id}', 'OrderController@order');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
