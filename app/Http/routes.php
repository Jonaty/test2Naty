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


Route::get('test', function()
{
	$user = new App\User;

	$user->name = 'Naty';
	$user->email = 'naty_snuff@hotmail.com';
	$user->password = bcrypt('naty123');
	$user->rol = 'admin';

	$user->save();

	return $user;
});

Route::get('/', ['as' => 'home', 'uses' => 'PaginasController@home']);

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PaginasController@saludo'])->where('nombre', "[A-Za-z]+");

//Solo con esta linea se puede tener acceso a todos los metodos del controlador

Route::resource('mensajes', 'MensajesController');

Route::resource('usuarios', 'UsuariosController');

//Ruta para el login!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('login', 'Auth\AuthController@showLoginForm');

Route::post('login', 'Auth\AuthController@login');


//Ruta para el registro!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

Route::get('registro', 'Auth\AuthController@showRegistrationForm');

Route::post('registro', 'Auth\AuthController@register');

Route::get('salir', 'Auth\AuthController@logout');

