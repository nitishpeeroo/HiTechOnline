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
Route::get('event/{event_id}/show', 'EventController@showEvent');
Route::get('event/{event_id}/join', 'EventController@joinEvent');


// User
Route::post('Registration', 'UserController@doRegistration');
Route::post('Login', 'UserController@doLogin');
Route::get('logout', 'UserController@doLogout');

Route::get('best_seller', 'EventController@FindBestSeller');

// Profil
Route::get('profil', function()
{          
	return View::make('profil');
});
Route::post('save_profil', 'ProfilController@doSave');
