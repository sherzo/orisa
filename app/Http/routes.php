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



Route::get('admin', function(){

		return view('admin.index');
});


/*
*		RUTAS JESUS
*/

Route::group(['prefix' => 'admin'], function(){ 

	Route::resource('employees', 'EmployeesController');
	Route::get('employees/{all}/create', [
		'uses' => 'EmployeesController@create',
		'as' => 'admin.employees.create'
		]);
	Route::get('employees/{id}/destroy', [
		'uses' => 'EmployeesController@destroy',
		'as' => 'admin.employees.destroy'
		]);
	Route::post('employees/search', [
		'uses' => 'EmployeesController@search',
		'as' => 'admin.employees.search'
		]);
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

Route::group(['prefix' => 'admin'], function(){

	Route::resource('compra', 'PurchasesController');
});

Route::get('compra', function(){
		$providers = \DB::table('providers')->lists('razon_social', 'id');
        return view('admin.purchases.index', compact('providers'));
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
	Route::post('platos/addIngredient', [
		'uses' => 'PlatesController@addIngredient',
		'as' => 'admin.plates.addIngredient'
		]);
	
	Route::get('platos/listIngredient', function(){

		return view('admin.plates.partials.list_ingredient');
	
	}); 

});

Route::get('lista_ingredientes', function(){
	
	return view('admin.plates.partials.list_ingredient'); 

});

Route::auth();

Route::get('/home', 'HomeController@index');
