<?php

// Route::get('admin', ['middleware' => 'admin', function () {
//     return view('admin.admin');
// }]);

Route::get('admin', ['middleware' => 'admin', function () {
    //
}]);

Route::get('admin', 'AdminController@index')->name('admin')->middleware('admin');;

Route::resource('admin', 'AdminController');

// restaurants
// Route::get('restaurant', 'AdminController@getAllRestaurant')->middleware('admin');

// Route::get('restaurant/{id}/edit', 'AdminController@editRestaurant')->middleware('admin');

Route::get('restaurant/index', 'AdminController@indexRestaurant')->middleware('admin')->name('admin.restaurant.index');

// ->middleware('admin')

// user
Route::get('admin/user/{id}/edit', 'AdminController@editUser')->name('admin.user.edit')->middleware('admin');

Route::get('user/index', 'AdminController@indexUser')->middleware('admin')->name('admin.user.index');
