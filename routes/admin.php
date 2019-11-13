<?php

Route::get('admin', ['middleware' => 'admin', function () {
}]);

// homepagina
Route::get('admin', 'AdminController@index')->name('admin')->middleware('admin');;

// adminController
Route::resource('admin', 'AdminController');

// restaurants
Route::get('admin/restaurant/index', 'AdminController@indexRestaurant')->name('admin.restaurant.index')->middleware('admin');

Route::get('admin/restaurant/{id}/edit', 'AdminController@editRestaurant')->name('admin.restaurant.edit')->middleware('admin');

Route::post('admin/restaurant/{id}', 'AdminController@updateRestaurant')->name('admin.restaurant.update')->middleware('admin');

Route::post('admin', 'AdminController@destroy')->name('admin.destroy')->middleware('admin');


// user
Route::get('admin/user/index', 'AdminController@indexUser')->name('admin.user.index')->middleware('admin');

Route::get('admin/user/{id}/edit', 'AdminController@editUser')->name('admin.user.edit')->middleware('admin');

Route::post('admin/user/{id}', 'AdminController@updateUser')->name('admin.user.update')->middleware('admin');

Route::post('admin', 'AdminController@destroy')->name('admin.destroy')->middleware('admin');

// ->middleware('admin')
