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

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

/*Route::group(['middleware' => ['web']], function () {
    Route::resource('/home','CertivyController',['only' => [
    'index', 'show'
	]]);
});*/

Route::group(['middleware'=>['web']],function(){
	Route::resource('/home','CertivyController');
});



Route::group(['middleware'=>['web']],function(){
	Route::resource('/event','EventController');
});


