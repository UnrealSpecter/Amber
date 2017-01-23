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
Route::group(['prefix'=>'Amber','as'=>'Amber'], function(){
    Route::get('/', ['as' => 'Amber', 'uses' => 'AmberWebsite\AmberController@index']);
    Route::get('/werken', ['as' => 'werken', 'uses' => 'AmberWebsite\AmberController@werken']);
    Route::get('/theater', ['as' => 'theater', 'uses' => 'AmberWebsite\AmberController@theater']);
    Route::get('/cv', ['as' => 'cv', 'uses' => 'AmberWebsite\AmberController@cv']);
});

/* Backend route groups for Amber's website */
Route::group(['middleware' => 'auth'], function () {

	// base dashboard route
    Route::get('/Amber/dashboard', 'AmberWebsite\AmberController@dashboard');

    //werken routes
    Route::get('/Amber/dashboard/werken', 'AmberWebsite\AmberController@werken');

    // //fotoblog routes
    // Route::get('/Amber/dashboard/fotoblog-overview', 'AmberWebsite\AmberController@fotoblog');
    // Route::get('/Amber/dashboard/fotoblog-create', 'AmberWebsite\AmberController@fotoblogCreate');
    // // Route::get('/Amber/dashboard/fotoblog-edit', 'AmberWebsite\AmberController@fotoblogCreate');
    // // Route::get('/Amber/dashboard/fotoblog-delete', 'AmberWebsite\AmberController@fotoblogCreate');
    // Route::post('/Amber/dashboard/fotoblog-save', 'AmberWebsite\AmberController@createFotoblog');

    Route::resource('/Amber/performances', 'BackendControllers\PerformanceController', ['except' => ['show']]);
	Route::resource('/Amber/dashboard/photos', 'AmberWebsite\BackendControllers\PhotoController', ['except' => [
		'show'
	]]);
});
