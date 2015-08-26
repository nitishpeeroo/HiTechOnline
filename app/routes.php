<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
//Route::get('index', function()
//{
//	return View::make('homepage');
//});
Route::get('index', 'HomeController@eventAll');
// User
Route::post('Registration', 'UserController@doRegistration');
Route::post('Login', 'UserController@doLogin');
Route::get('logout', 'UserController@doLogout');
Route::get('Event', 'EventController@list_event');