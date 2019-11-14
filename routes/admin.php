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

Route::post('admin/restaurant/{id}', 'AdminController@destroyRestaurant')->name('admin.destroyrestaurant')->middleware('admin');


// user
Route::get('admin/user/index', 'AdminController@indexUser')->name('admin.user.index')->middleware('admin');

Route::get('admin/user/{id}/edit', 'AdminController@editUser')->name('admin.user.edit')->middleware('admin');

Route::post('admin/user/{id}', 'AdminController@updateUser')->name('admin.user.update')->middleware('admin');

Route::post('admin/user/{id}', 'AdminController@destroyUser')->name('admin.destroyuser')->middleware('admin');

// ->middleware('admin')

//order
Route::get('admin/order/index', 'AdminController@indexOrder')->name('admin.order.index')->middleware('admin');

// Route::get('admin/order/{id}/edit', 'AdminController@editOrder')->name('admin.order.edit')->middleware('admin');

// Route::post('admin/order/{id}', 'AdminController@updateOrder')->name('admin.order.update')->middleware('admin');

// Route::post('admin/order/{id}', 'AdminController@destroyOrder')->name('admin.destroyorder')->middleware('admin');
