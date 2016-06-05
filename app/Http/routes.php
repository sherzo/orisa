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
Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('tablero', function(){

		return view('layout.tablero');
});

Route::get('clientes', function(){

		return view('clientes.clientes');
});

Route::get('asistencia', function(){

		return view('nomina.assis_emp');
});

Route::get('login', function(){

	return view('login.login');
});

   
Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('proveedores', 'ProvidersController');

});

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('licores', 'LiqueursController');

});

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('ingredientes', 'IngredentsController');

	
});

Route::group(['prefix' => 'admin'], function(){ 


	Route::resource('employees', 'EmployeesController');
	
});

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('usuarios', 'UsersController');

});

