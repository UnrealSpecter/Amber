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

//base route for returning all champions that are added.
Route::get('/all-in', 'AllInController@index');

Route::get('/all-in/addChampion', 'AllInController@addChampion');

Route::get('/all-in/{id}', 'AllInController@editChampion');

Route::post('/all-in/edit', 'AllInController@saveChampion');

Route::post('/all-in/save', 'AllInController@createChampion');

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

	//base dashboard route
    Route::get('/Amber/dashboard', 'AmberWebsite\AmberController@dashboard');
    
    //werken routes
    Route::get('/Amber/dashboard/werken', 'AmberWebsite\AmberController@werken');

    //fotoblog routes
    Route::get('/Amber/dashboard/fotoblog-overview', 'AmberWebsite\AmberController@fotoblog');
    Route::get('/Amber/dashboard/fotoblog-create', 'AmberWebsite\AmberController@fotoblogCreate');
    // Route::get('/Amber/dashboard/fotoblog-edit', 'AmberWebsite\AmberController@fotoblogCreate');
    // Route::get('/Amber/dashboard/fotoblog-delete', 'AmberWebsite\AmberController@fotoblogCreate');
    Route::post('/Amber/dashboard/fotoblog-save', 'AmberWebsite\AmberController@createFotoblog');


});


