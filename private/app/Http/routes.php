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
/*Route::get('/signup', function()
{
    return view('login');
});
Route::get('/panitia', function()
{
    return view('panitia');
});

Route::get('/signup', 'signupController@signUp');*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/event', 'EventController@event');