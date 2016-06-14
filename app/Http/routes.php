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
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.usuarios.destroy'
		]);

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

   
/*
* 		RUTAS OLIVER
*/

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('proveedores', 'ProvidersController');
	Route::get('proveedores/{id}/destroy', [
		'uses' => 'ProvidersController@destroy',
		'as' => 'admin.proveedores.destroy'
		]);
	Route::post('proveedores/search', [
		'uses' => 'ProvidersController@search',
		'as' => 'admin.proveedores.search'
		]);
});



/*
* 		RUTAS SAUL 
*/


Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('licores', 'LiqueursController');
	Route::get('licores/{id}/destroy', [
		'uses' => 'LiqueursController@destroy',
		'as' => 'admin.licores.destroy'
		]);	
});

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('ingredientes', 'IngredientsController');
	Route::get('ingredientes/{id}/destroy', [
		'uses' => 'IngredientsController@destroy',
		'as' => 'admin.ingredientes.destroy'
		]);	
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('platos', 'PlatesController');

});






