<?php

Route::get('logout', 'SessionController@destroy');

// Resources
Route::resource('home','HomeController');
Route::resource('admin', 'AdminController');
Route::resource('session', 'SessionController');
Route::resource('user','UserController');
Route::resource('about','AboutController');
Route::resource('tutorial','TutorialController');
Route::resource('computer','ComputerEngineeringController');
Route::resource('software','SoftwareEngineeringController');
Route::resource('project','ProjectController');
Route::resource('builder','BuilderController');



// Builder Routes
Route::post('/army/store','ArmyController@store');

// Catch All Route
App::missing(function() {
    return Redirect::route('home.index');
});
