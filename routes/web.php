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

//searchbar
Route::post('search', ['as' => 'search', 'uses' => 'RestaurantController@search']);

// restaurants page
Route::resource('restaurant', 'RestaurantController');
// Route::post('/restaurant/{id}', 'RestaurantController@store')->name('restaurant.store');
Route::get('/restaurant', 'RestaurantController@index')->name('restaurant');

Route::resource('restaurant/{restaurant_id}/consumable', 'ConsumableController');

// Create a consumable
Route::resource('createconsumables', 'CreateconsumablesController');

// Consumables
Route::resource('consumable', 'ConsumableController');

//Edit consumable
Route::resource('editconsumables', 'EditconsumableController');

//Profile
Route::resource('/profile', 'ProfileController');

//Edit profile
Route::resource('editprofile', 'EditprofileController');

//Order
Route::resource('order', 'OrderController');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
