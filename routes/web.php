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

Route::get('/restaurant', 'ContactController@index')->name('restaurant');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
