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

Route::resource('restaurant', 'RestaurantController');

Route::resource('restaurant/{restaurant_id}/consumables', 'ConsumableController');

// Route::get('/restaurant', 'RestaurantController@index')->name('restaurant');

// Route::post('/restaurant/{id}', 'RestaurantController@store')->name('restaurant.store');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/dominos', 'DominosController@index')->name('dominos');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
