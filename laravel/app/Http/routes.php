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

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');


Route::resource('movie','MovieController');

Route::get('prueba',function(){
	return "Hola desde routes.php";
});

Route::get('nombre/{nombre}',function($nombre){
	return "mi nombre es:".$nombre;
});

Route::get('edad/{edad}',function($edad){
	return "mi edad es:".$edad;
});

Route::get('edad2/{edad?}',function($edad=20){
	return "mi edad es:".$edad;
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
