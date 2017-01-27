<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

//automatically made login routes
Auth::routes();

//home routes
Route::get('/home', 'HomeController@index');

/* Front-end route groups for Amber's website */
Route::group(['prefix'=>'/','as'=>'/'], function(){
    Route::get('/', 'FrontEndControllers\HomeController@index');
    Route::get('/book', 'FrontEndControllers\BookController@index');
    Route::get('/cv', 'FrontEndControllers\CVController@index');
    Route::get('/photos', 'FrontEndControllers\PhotoController@index');
    Route::get('/works', 'FrontEndControllers\WorkController@index');
    Route::get('/performances', 'FrontEndControllers\PerformanceController@index');
});

/* Backend route groups for Amber's website */
Route::group(['middleware' => 'auth'], function () {

	// base dashboard route
    Route::get('/Amber/dashboard', function () {
    	return view('amber.backend.dashboard');
	});
    Route::resource('/Amber/performances', 'BackendControllers\PerformanceController', ['except' => ['show']]);
	Route::resource('/Amber/photos', 'BackendControllers\PhotoController', ['except' => [
		'show'
	]]);

	Route::resource('/Amber/works', 'BackendControllers\WorkController', ['except' => [
		'show'
	]]);

	Route::post('/Amber/works/{$ids}', 'BackendControllers\WorkController@destroy');

    Route::resource('/Amber/CV', 'BackendControllers\CVController', ['except' => ['show']]);

    Route::get('/Amber/bookerino', 'BackendControllers\BookController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
