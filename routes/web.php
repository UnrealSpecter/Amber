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
//automatically made login routes
Auth::routes();

//home routes
Route::get('/home', 'HomeController@index');

/* Front-end route groups for Amber's website */
Route::group(['prefix'=>'/','as'=>'/'], function(){
    Route::get('/', 'FrontEndControllers\HomeController@index');
    Route::get('/diaryfragments', 'FrontEndControllers\AgendaFragmentController@index');
    Route::get('/curriculumvitae', 'FrontEndControllers\CVController@index');
    Route::get('/photography', 'FrontEndControllers\PhotoController@index');
    Route::get('/myworks', 'FrontEndControllers\WorkController@index');
    Route::get('/theatre', 'FrontEndControllers\PerformanceController@index');
});

/* Backend route groups for Amber's website */
Route::group(['middleware' => 'auth'], function () {

	// base dashboard route
    Route::get('/admin', function () {
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
    Route::resource('/Amber/agendafragments', 'BackendControllers\AgendafragmentController', ['except' => ['show']]);

    Route::resource('/Amber/CV/categories', 'BackendControllers\CVCategoryController', ['except' => ['index', 'show']]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
