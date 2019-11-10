<?php

// Route::get('admin', ['middleware' => 'admin', function () {
//     return view('admin.admin');
// }]);

Route::get('admin', ['middleware' => 'admin', function () {
    //
}]);

Route::get('admin', 'AdminController@index')->name('admin')->middleware('admin');;

Route::resource('admin', 'AdminController');
