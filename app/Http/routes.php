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


/*
* 		RUTAS GENERALES
*/

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('usuarios', 'UsersController');

});

Route::get('login', function(){

	return view('login.login');
});

Route::get('tablero', function(){

		return view('layout.tablero');
});


/*
*		RUTAS JESUS
*/

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('employees', 'EmployeesController');
	
});

Route::get('asistencia', function(){

		return view('nomina.assis_emp');
});

Route::get('clientes', function(){

		return view('clientes.clientes');
});

   
/*
* 		RUTAS OLIVER
*/

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('proveedores', 'ProvidersController');
	
});


/*
* 		RUTAS SAUL 
*/


Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('licores', 'LiqueursController');

});

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('ingredientes', 'IngredentsController');
	
});






