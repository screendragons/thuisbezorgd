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
Route::get('restaurant', 'AdminController@getAllRestaurants')->middleware('admin');

Route::get('restaurant/{id}/edit', 'AdminController@editRestaurant')->middleware('admin');

Route::get('restaurant/index', 'AdminController@index')->middleware('admin');

// ->middleware('admin')
