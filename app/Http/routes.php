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
	Route::resource('privilegios', 'PrivelController');
	Route::resource('usuarios', 'UsersController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.usuarios.destroy'
		]);
	/*
	|	
	|	Rutas Jesús Matute
	|
	*/
 	Route::resource('/', 'HomeController@index');
 	Route::get('salir', 'Auth\AuthController@logout');
 	Route::get('empleados/buscar', [
 		'uses' =>'EmployeesController@search',
 		'as'   => 'admin.empleados.search'
 		]);
 	
 	Route::resource('empleados', 'EmployeesController');
 	Route::get('employees/{id}/destroy', [
 		'uses' => 'EmployeesController@destroy',
		'as'   => 'admin.employees.destroy'
		]);

	Route::resource('cargos', 'PositionsController');
	Route::get('cargos/{id}/destroy', [
		'uses' => 'PositionsController@destroy',
		'as' => 'admin.cargos.destroy'
		]);
	Route::get('planificaciones/{id}/administrar', [
		'uses' => 'PlanningsController@administrar',
		'as'   => 'admin.planificaciones.administrar'
		]);
	Route::get('asistencias/buscar', [
 		'uses' =>'AssistsController@search',
 		'as'   => 'admin.asistencias.search'
 		]);
	Route::resource('asistencias', 'AssistsController');
	/*
	|
	|	Rutas resource controladores de planificación
	|
	*/
	Route::resource('planificaciones', 'PlanningsController');
	Route::get('planificaciones/administrar/dias/turnos/seleccionar-planificacion', 'TurnsController@select');
	Route::resource('planificaciones/administrar/dias/turnos', 'TurnsController');
	Route::resource('planificaciones/administrar/dias', 'Planning_DaysController');
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
	Route::resource('sauces', 'SaucesController');
	Route::resource('reservaciones', 'ReservationsController');
	Route::resource('bebidas', 'DrinksController');

	//LICORES BEBIDAS

	Route::get('bebidas/create/liqueurs/{type}',  function($type){
		$liqueur = App\Liqueur::where('type_id', $type)->get();
		return Response::json($liqueur);
	});

	Route::get('bebidas/create/addliqueur/{id_l}', function($id_l){
		$liqueur = App\Liqueur::where('id', $id_l)->get();

		$units = App\Unit::all();

		return Response::json(array('liqueur' => $liqueur, 'units' => $units));
	});

	// INGREDIENTES BEBIDAS

	Route::get('bebidas/create/ingredients/{type}',  function($type){
		$ingredients = App\Ingredient::where('id_type', $type)->get();
		return Response::json($ingredients);
	});			
	Route::get('bebidas/create/addingredient/{id_i}', function($id_i){
		$ingredient = App\Ingredient::where('id', $id_i)->get();

		$units = App\Unit::all();

		return Response::json(array('ingredient' => $ingredient, 'units' => $units));
	});


	//INGREDIENTES SALSAS
	
	Route::get('sauces/create/ingredients/{type}',  function($type){
		$ingredients = App\Ingredient::where('id_type', $type)->get();
		return Response::json($ingredients);
	});			
	Route::get('sauces/create/addingredient/{id_i}', function($id_i){
		$ingredient = App\Ingredient::where('id', $id_i)->get();

		$units = App\Unit::all();

		return Response::json(array('ingredient' => $ingredient, 'units' => $units));
	});

	// INGREDIENTES PLATOS
	Route::get('platos/create/ingredients/{type}',  function($type){
		$ingredients = App\Ingredient::where('id_type', $type)->get();
		return Response::json($ingredients);
	});			
	Route::get('platos/create/addingredient/{id_i}', function($id_i){
		$ingredient = App\Ingredient::where('id', $id_i)->get();

		$units = App\Unit::all();

		return Response::json(array('ingredient' => $ingredient, 'units' => $units));
	});

	// LICORES
	Route::get('platos/create/liqueurs/{type}',  function($type){
		$liqueur = App\Liqueur::where('type_id', $type)->get();
		return Response::json($liqueur);
	});

	Route::get('platos/create/addliqueur/{id_l}', function($id_l){
		$liqueur = App\Liqueur::where('id', $id_l)->get();

		$units = App\Unit::all();

		return Response::json(array('liqueur' => $liqueur, 'units' => $units));
	});

	Route::post('clientes/busqueda', [
		'uses' => 'ClientsController@search',
		'as' => 'admin.clients.search'
		]);

 	});