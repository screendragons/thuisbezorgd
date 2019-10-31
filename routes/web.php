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
Route::post('search', ['as' => 'search', 'uses' => 'RestaurantController@search']);

// restaurants page
Route::resource('restaurant', 'RestaurantController');
// Route::post('/restaurant/{id}', 'RestaurantController@store')->name('restaurant.store');
Route::get('/restaurant', 'RestaurantController@index')->name('restaurant');

Route::get('/restaurant/create','RestaurantController@create')->name('restaurant.create');

Route::get('/restaurant/show','RestaurantController@show')->name('restaurant.show');

Route::resource('restaurant/{restaurant_id}/consumable', 'ConsumableController');

// Consumables
Route::resource('consumable', 'ConsumableController');
Route::get('/consumable/create','ConsumableController@create')->name('consumable.create');
Route::get('/consumable/edit','ConsumableController@edit')->name('consumable.edit');

//Profile
Route::resource('/profile', 'ProfileController');
Route::get('/profile/edit','ProfileController@edit')->name('profile.edit');

//Order
Route::resource('order', 'OrderController');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
