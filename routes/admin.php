<?php

// homepagina
Route::get('admin', 'AdminController@index')->name('admin');

Route::resource('admin/user', 'UserController' , ['as' => 'admin']);
Route::resource('admin/restaurant', 'RestaurantController' , ['as' => 'admin']);

Route::resource('admin/order', 'OrderController' , ['as' => 'admin']);


// adminController
Route::resource('admin', 'AdminController');


Route::resource('admin/consumable', 'ConsumableController', ['as' => 'admin']);

// restaurants
// Route::get('admin/restaurant/index', 'AdminController@indexRestaurant')->name('admin.restaurant.index');

// Route::get('admin/restaurant/{id}/edit', 'AdminController@editRestaurant')->name('admin.restaurant.edit');

// Route::post('admin/restaurant/{id}', 'AdminController@updateRestaurant')->name('admin.restaurant.update');

// Route::delete('admin/restaurant/delete/{id}', 'AdminController@destroyRestaurant')->name('admin.restaurant.destroy');


// user
// Route::get('admin/user/index', 'AdminController@indexUser')->name('admin.user.index');

// Route::get('admin/user/{id}/edit', 'AdminController@editUser')->name('admin.user.edit');

// Route::post('admin/user/{id}', 'AdminController@updateUser')->name('admin.user.update');

// Route::delete('admin/user/delete/{id}', 'AdminController@destroyUser')->name('admin.user.destroy');

//order
// Route::get('admin/order/index', 'AdminController@indexOrder')->name('admin.order.index');

// Route::resource('admin/order', 'OrderController');

// Route::get('admin/order/{id}/edit', 'AdminController@editOrder')->name('admin.order.edit');

// Route::post('admin/order/{id}', 'AdminController@updateOrder')->name('admin.order.update');

// Route::delete('admin/order/delete/{id}', 'AdminController@destroyOrder')->name('admin.destroyorder');
