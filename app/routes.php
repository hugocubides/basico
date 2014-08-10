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
	//Si hay un usuario logueado ingresa al tablero, sino va a la pantalla de bienvenida
	if (Confide::user()) {
		return Redirect::to('dashboard');
	} else {
		return View::make('hello');
	}
	
});

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('logout', 'UsersController@logout');

//Valida primero que exista una sesion abierta en auth para ingresar a cualquiera de las rutas
Route::group(array('before' => 'auth'), function()
{   
	Route::get('dashboard', 'UsersController@showDashboard');
	
	//muestra el perfil del usuario usando en el segmento el nombre de usuario
	Route::get('{username}', 'UsersController@showProfile');
});
