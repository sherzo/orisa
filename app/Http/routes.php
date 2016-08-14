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

	/*
	|	RUTAS DE INICIO
	|
	*/

Route::get('/', function()
{
	return View::make('welcome');
});

Route::group(['prefix' => '/', 'middleware' => 'guest', 'namespace' => 'Auth'], function() {

	/*
	|	RUTAS ANTES DE INICIAR SESIÓN NO MANDA ERROR 404
	|
	*/

	Route::get('iniciar-sesion', 'AuthController@getLogin');
	Route::post('iniciar-sesion', 'AuthController@login');
	Route::get('registrar', 'AuthController@showRegistrationForm');
    Route::post('registrar', 'AuthController@register');

});


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){ 

	/*
	|	RUTAS GENERALES
	|
	*/

	Route::resource('usuarios', 'UsersController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.usuarios.destroy'
		]);


	/*
	|	
	|	RUTAS JESUS
	|
	*/

 	Route::resource('/', 'HomeController@index');
 	Route::get('salir', 'Auth\AuthController@logout');
 	Route::get('employees/search', 'EmployeesController@search');
 	Route::resource('employees', 'EmployeesController');
 	Route::get('employees/{id}/destroy', [
 		'uses' => 'EmployeesController@destroy',
		'as' => 'admin.employees.destroy'
		]);
	Route::resource('cargos', 'PositionsController');
	Route::get('cargos/{id}/destroy', [
		'uses' => 'PositionsController@destroy',
		'as' => 'admin.cargos.destroy'
		]);
	/*
	|	
	|	RUTAS OLIVER
	|
	*/

	Route::resource('proveedores', 'ProvidersController');
		Route::post('proveedores/search', [
			'uses' => 'ProvidersController@search',
			'as' => 'admin.proveedores.search'
		]);	
		Route::get('proveedores/{id}/destroy', [
			'uses' => 'ProvidersController@destroy',
			'as' => 'admin.proveedores.destroy'
		]);

	Route::get('compra/ordenes', [
		'uses' => 'PurchasesController@order',
		'as' => 'admin.compra.ordenes'
		]);
	Route::resource('compra', 'PurchasesController');	
	Route::pattern('compra', '[0-9]+');
		
	
	
	Route::resource('licores', 'LiqueursController');
		Route::get('licores/{id}/destroy', [
			'uses' => 'LiqueursController@destroy',
			'as' => 'admin.licores.destroy'
		]);	

	Route::resource('ingredientes', 'IngredientsController');
		Route::get('ingredientes/{id}/destroy', [
			'uses' => 'IngredientsController@destroy',
			'as' => 'admin.ingredientes.destroy'
		]);	

	/*
	|	
	|	RUTAS SAUL
	|
	*/

	Route::resource('clientes', 'ClientsController');

	Route::resource('platos', 'PlatesController');
	Route::post('platos/addIngredient', [
		'uses' => 'PlatesController@addIngredient',
		'as' => 'admin.plates.addIngredient'
		]);
	Route::post('clientes/busqueda', [
		'uses' => 'ClientsController@search',
		'as' => 'admin.clients.search'
		]);

 });

	

