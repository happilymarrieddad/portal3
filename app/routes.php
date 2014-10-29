<?php

Route::get('logout', 'SessionController@destroy');

// Resources
Route::resource('home','HomeController');
Route::resource('admin', 'AdminController');
Route::resource('session', 'SessionController');
Route::resource('user','UserController');


// Catch All Route
App::missing(function() {
    return Redirect::route('home.index');
});
