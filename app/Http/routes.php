<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::post('authenticate', 'HomeController@authenticate');
    Route::get('dashboard', 'DashboardController@viewDashboard');
    Route::get('logout', 'HomeController@logout');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
