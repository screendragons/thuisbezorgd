<?php

Route::get('/admin', function () {
    return view('admin');
});

// Route::get('admin', ['middleware' => 'admin', function () {
//     //
// }]);
