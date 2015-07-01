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
    Route::match(['get', 'post'], 'dashboard', 'DashboardController@viewDashboard');
    Route::get('logout', 'HomeController@logout');
    Route::get('listcars', 'DashboardController@listCars');
    Route::post('deletecar', 'DashboardController@deleteSpecificCar');
    Route::get('showcar/{id}', 'DashboardController@showCar');
    Route::post('addcar', 'DashboardController@addCar');
    Route::resource('variant', 'VariantController');
    Route::post('specificcars', 'DashboardController@getSpecificCompanyCars');
    Route::get('reviews', 'ReviewController@listReviews');
    Route::post('reviewapproval', 'ReviewController@reviewApproval');
    Route::post('deletereview', 'ReviewController@deleteReview');
    Route::get('assistance', 'GeneralController@listAssistanceDetails');
    Route::post('addassistance', 'GeneralController@addAssistanceDetails');
    Route::post('editassistance', 'GeneralController@editAssistanceDetails');
    Route::post('updateassistance', 'GeneralController@updateAssistanceDetails');
    Route::post('updatefeatures', 'VariantController@updateFeatures');
    Route::post('updatefuelefficiency', 'VariantController@updateFuelEfficiency');
    Route::post('updatepricedetails', 'VariantController@updatePriceDetails');
    Route::post('updateenginedetails', 'VariantController@updateEngineDetails');
    Route::post('updatesteeringdetails', 'VariantController@updateSteeringDetails');
    Route::post('updatewheeldetails', 'VariantController@updateWheelDetails');
    Route::post('updatedimensiondetails', 'VariantController@updateDimensionDetails');
    Route::post('updatebrakedetails', 'VariantController@updateBrakeDetails');
    Route::post('updatecapacitydetails', 'VariantController@updateCapacityDetails');
    Route::post('deleteassistance', 'GeneralController@deleteAssistanceDetails');
    Route::get('listvideos', 'GeneralController@listVideos');
    Route::get('loanenquiry', 'GeneralController@listLoanEnquiryDetails');
    Route::get('editloanenquiry/{id}', 'GeneralController@specificLoanEnquiryDetails');
});
 Route::get('/', 'site\HomeController@index');
 Route::get('listcars/{id}', 'site\CarController@index');
 Route::get('specificcar/{id}', 'site\CarController@viewSpecificCar');
 Route::resource('variant','site\VariantController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
