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
//Route::get('edit_profil', function()
//{
//	return View::make('index');
//});
// event
Route::get('index', 'HomeController@eventAll');
Route::get('event/{event_id}/show', 'EventController@showEvent');
Route::post('event/join', 'EventController@joinEvent');
Route::post('event/current', 'EventController@currentEvent');
// User
Route::post('Registration', 'UserController@doRegistration');
Route::post('Login', 'UserController@doLogin');
Route::get('logout', 'UserController@doLogout');

Route::get('best_seller', 'EventController@FindBestSeller');

// Profil
Route::get('edit_profil', 'ProfilController@doEdit');
Route::post('save_profil', 'ProfilController@doSave');


//Panier
Route::get('cart', 'CartController@showCart');
Route::post('event/{event_id}/addCart', 'CartController@addToCart');
Route::get('confirm_cart', 'CartController@confirmCart');
Route::get('cart_confirmed', 'CartController@confirmedCart');
//Mes commandes
Route::get('order', 'ProfilController@showOrder');

