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

	Route::get('/search/{cedula}', function($cedula){
		$client = App\Client::where('dni_cedula', $cedula)->get();

		return Response::json($client);
	});
	Route::resource('reservaciones', 'ReservationsController');
	Route::get('reservaciones/{id}/destroy', [
	'uses' => 'ReservationsController@destroy',
	'as' => 'reservaciones.destroy'
	]);

	Route::get('/solicitud-reservacion/{fecha}/{hora}', function($fecha, $hora){

	$tables = App\Table::all();

	$reservations = App\Reservation::where('fecha_reservacion', $fecha)->get();

	$mesas = array('1' => null,
				   '2' => null,
				   '3' => null,
				   '4' => null,
				   '5' => null,
				   '6' => null,
				   '7' => null,
				   '8' => null,
				   '9' => null,
				   '10' => null,
				   '11' => null,
				   '12' => null);

	foreach ($reservations as $key => $reservation) {

		foreach ($tables as $key2 => $table) {

			if($reservation->table_id == $table->id) {

				foreach ($mesas as $key3 => $mesa) {

					if($key3 == $table->id){

						$mesas[$key3] = true;

					}
				}
			}
		}
	}

	return Response::json($mesas);
	});

	Route::resource('usuario-vip', 'TemporalController');

	Route::group(['prefix' => '/', 'middleware' => 'guest'], function() {

		Route::get('/', 'AuthenticateController@index');

		// ROUT::GET

		Route::get('registrarme', 'RegisterController@register');
		Route::get('activarcuenta/{email}/{code}/', 'ActivationController@activate');

		// ROUTE::POST
		
		Route::post('registrarme', 'RegisterController@postRegister');
		Route::post('iniciarsesion', 'AuthenticateController@postLogin');

		//Route::get('iniciar-sesion', 'AuthController@getLogin');
		//Route::post('iniciar-sesion', 'AuthController@login');
		//Route::get('registrar', 'AuthController@showRegistrationForm');
	    //Route::post('registrar', 'AuthController@register');

	});

	Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	/*
	|	RUTAS GENERALES
	|
	*/
	Route::resource('privilegios', 'PrivilegesController');
	Route::resource('usuarios', 'UsersController');
	Route::get('usuarios/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.usuarios.destroy'
		]);
	Route::get('bitacora', [
		'uses' => 'BitacoraController@index',
		'as' => 'admin.bitacora'
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
	Route::get('asistencias/{id}/destroy', ['uses' => 'AssistsController@destroy', 'as' => 'admin.asistencia.destroy']);
	/*
	|
	|	Rutas resource controladores de nómina
	|
	*/
	Route::resource('asistencias', 'AssistsController');
	Route::resource('deducciones', 'DeductionsController');
	Route::get('agregar_asignaciones/{year}/{mes}/{quincena}', function ($year,$mes,$quincena) {

		$others_assignments = App\Assignment::all();
		$count = count($others_assignments);

		$employees = App\Employee::all();

		foreach ($employees as $key => $employee)
		{
				  $others_assignments_pivot = App\Employee::find($employee->id);
					$boleean = App\Employee::find($employee->id)->assignmentsTemporary;

					foreach ($boleean as $boleean)
					{
					 		$boleean->pivot->estatus = '1';
							$boleean->pivot->save();
					}

					foreach ($others_assignments_pivot->assignmentsTemporary as $others_assignments_pivot)
					{

							$others_assignments_dx[] = $others_assignments_pivot;
					}
		}

		return view('admin.payroll.news_assignments', compact('others_assignments', 'others_assignments_dx', 'count', 'employees', 'year', 'mes', 'quincena'));
	});

	Route::resource('temporary_assigments', 'TemporaryAssignmentsController');
	Route::resource('asignaciones', 'AssignmentsController');
	Route::resource('asignaciones_extras', 'AssignmentsExtrasController');
	Route::get('agregar_deducciones/{year}/{mes}/{quincena}', function ($year,$mes,$quincena) {

		$others_deductions = App\DeductionExtra::all();
		$count = count($others_deductions);

		$employees = App\Employee::all();

		foreach ($employees as $key => $employee)
		{
				  $others_deductions_pivot = App\Employee::find($employee->id);
					$boleean = App\Employee::find($employee->id)->deductionsTemporary;

					foreach ($boleean as $boleean)
					{
					 		$boleean->pivot->estatus = '1';
							$boleean->pivot->save();
					}

					foreach ($others_deductions_pivot->deductionsTemporary as $others_deductions_pivot)
					{
							$others_deductions_dx[] = $others_deductions_pivot;
					}
		}

		return view('admin.payroll.news_deductions', compact('others_deductions', 'others_deductions_dx', 'count', 'employees', 'year', 'mes', 'quincena'));
	});
	Route::resource('temporary_deductions', 'TemporaryDeductionsController');
	Route::resource('deducciones_extras', 'DeductionsExtrasController');
	Route::get('nomina/ver', ['uses' => 'PayrollController@view', 'as' => 'admin.payroll.view']);
	Route::post('nomina/mostrar', ['uses' => 'PayrollController@show2', 'as' => 'admin.payroll.show']);
	Route::get('nomina/select', ['uses' => 'PayrollController@select', 'as' => 'admin.payroll.select']);
	Route::get('nomina/pdf/{id}', ['uses' => 'PayrollController@pdf', 'as' => 'admin.recibo.nomina']);

	Route::resource('nomina', 'PayrollController');
	/*
	|
	|	Rutas resource controladores de planificación
	|
	*/
	Route::get('planificaciones/{id}/destroy', ['uses' => 'PlanningsController@destroy','as' => 'admin.planificacion.destroy']);

	Route::resource('planificaciones', 'PlanningsController');
	Route::get('planificaciones/administrar/dias/turnos/seleccionar-planificacion', 'TurnsController@select');
	Route::get('planificaciones/administrar/dias/turnos/ver-planificacion', [
		'uses' => 'TurnsController@view',
		'as'   => 'admin.planificaciones.administrar.dias.turnos.view'
		]);
	Route::resource('planificaciones/administrar/dias/turnos', 'TurnsController');
	Route::resource('planificaciones/administrar/dias', 'Planning_DaysController');
	/*
	|
	|	RUTAS OLIVER
	|
	*/
	Route::get('proveedores/search', ['uses' => 'ProvidersController@search', 'as' => 'admin.proveedores.search']);
	Route::resource('proveedores', 'ProvidersController');

	Route::get('proveedores/{id}/destroy', [
			'uses' => 'ProvidersController@destroy',
			'as' => 'admin.proveedores.destroy'
		]);
	Route::get('compra/ordenes', [
		'uses' => 'PurchasesController@order',
		'as' => 'admin.compra.ordenes'
		]);
	Route::post('compra/save', ['uses' => 'PurchasesController@saved','as' => 'admin.compra.save']);
	Route::get('compra/{id}/procesar', ['uses' => 'PurchasesController@process','as' => 'admin.compra.procesar']);
	Route::resource('compra', 'PurchasesController');



	Route::resource('licores', 'LiqueursController');
		Route::get('licores/{id}/destroy', [
			'uses' => 'LiqueursController@destroy',
			'as' => 'admin.licores.destroy'
		]);
	Route::resource('ingredientes', 'IngredientsController');
		Route::get('ingredientes/{id}/destroy', [
			'uses' => 'IngredientsController@destroy',
			'as'   => 'admin.ingredientes.destroy'
		]);
	Route::resource('bebidas', 'DrinksController');
		Route::get('bebidas/{id}/destroy', [
			'uses' => 'DrinksController@destroy',
			'as'   => 'admin.bebidas.destroy'
			]);
	/*
	|
	|	RUTAS SAUL
	|
	*/
	Route::get('backup/download/{file_name}', ['uses' => 'BackupController@download', 'as' => 'backup.download']);
	Route::get('clientes/search', ['uses' => 'ClientsController@search', 'as' => 'admin.clientes.buscar']);
	Route::resource('clientes', 'ClientsController');
	Route::resource('platos', 'PlatesController');
	Route::resource('sauces', 'SaucesController');
	Route::resource('tragos', 'BeveragesController');
	Route::resource('jugos', 'JuicesController');
    Route::resource('backup', 'BackupController');
	Route::resource('reservaciones', 'ReservationsController');
	Route::get('comandas/en-espera', ['uses' => 'CommandsController@hold', 'as' => 'admin.comandas.en-espera']);
	Route::get('comandas/facturar', ['uses' => 'CommandsController@invoice', 'as' => 'admin.comandas.facturar']);
	Route::get('comandas/procesadas', ['uses' => 'CommandsController@process', 'as' => 'admin.comandas.procesadas']);
	Route::get('comandas/cliente-nuevo', ['uses' => 'CommandsController@client_new', 'as' => 'admin.comandas.cliente-nuevo']);
	Route::get('recibos/movimiento', ['uses' => 'InvoicesController@movimiento', 'as'   => 'admin.recibos.movimiento']);
	// Route::get('comandas/en-espera/procesar/{comanda}', function($comanda){
	// 	$command = App\Command::find($comanda);
	// 	$command->estatus = 'Lista';
	// 	$command->save();
	//
	// 	return Response::json($command);
	// });
	Route::get('comandas/en-espera/actualizar', function(){
		$command = App\Command::all();

		return Response::json($command);
	});
	Route::resource('comandas', 'CommandsController');
	Route::get('comandas/create/eleccion/{eleccion}', function($eleccion){
		if($eleccion == 1){
			$platos = App\Plate::all();
			$platos->each(function($platos){
				$platos->image;
			});

			return Response::json($platos);

		}elseif ($eleccion == 2) {
			$tragos = App\Beverage::all();
			$tragos->each(function($tragos){
				$tragos->image;
			});

			return Response::json($tragos);

		}elseif($eleccion == 3
			){

			$bebidas = App\Drink::all();

			return Response::json($bebidas);


		}elseif ($eleccion == 4) {

			$jugos = App\Juice::all();
			$jugos->each(function($jugos){
				$jugos->image;
			});

			return Response::json($jugos);

		}
	});
	Route::get('comandas/facturar/cliente/{documento}', function($documento){
		$client = App\Client::where('dni_cedula', $documento)->get();

		return Response::json($client);

	});
	Route::post('comandas/procesar-factura', ['uses' => 'CommandsController@process_invoice','as' => 'admin.comandas.procesar-factura']);

	Route::get('recibo/{id}',  ['as' => 'admin.recibo', function($id){


		$comanda = App\Command::find($id);

        $cliente = $comanda->client;


        $mesa = $comanda->table()->get();

        $platos = $comanda->plates()->get();
        $tragos = $comanda->beverages()->get();
        $bebidas = $comanda->drinks()->get();
        $jugos = $comanda->juices()->get();

        $total_p = 0;
        $total_j = 0;
        $total_b = 0;
        $total_t = 0;

        foreach ($platos as $key => $value) {
            $total_p = $value->precio+$total_p;
        }

        foreach ($tragos as $key => $value) {
            $total_t = $value->precio+$total_t;
        }

        foreach ($bebidas as $key => $value) {
            $total_b = $value->precio+$total_b;
        }

        foreach ($jugos as $key => $value) {
            $total_j = $value->precio+$total_j;
        }
        $subtotal = $total_t + $total_j + $total_p + $total_b;
        $iva = $subtotal * 0.12;
        $servicio = $subtotal * 0.05;

        $total = $subtotal + $iva + $servicio;

        $pdf = PDF::loadView('admin.comandas.recibo', ['comanda'=> $comanda, 'platos' => $platos, 'tragos' => $tragos, 'bebidas' => $bebidas, 'jugos' => $jugos, 'subtotal' => $subtotal, 'iva' => $iva, 'total' => $total, 'mesa' => $mesa, 'cliente' => $cliente, 'servicio' => $servicio]);

        	return $pdf->download('recibo_n-0'.$comanda->id.'.pdf');
        // return view('admin.comandas.recibo', compact('comanda', 'platos', 'tragos', 'bebidas', 'jugos', 'subtotal', 'iva', 'servicio', 'total', 'mesa', 'cliente'));


		}]);

		Route::get('comandas/agregar/{id}', [
			'uses' => 'CommandsController@add',
			'as'   => 'admin.comandas.add'
		]);

		Route::get('comandas/agregar/create/eleccion/{eleccion}', function($eleccion){
			if($eleccion == 1){
				$platos = App\Plate::all();
				$platos->each(function($platos){
					$platos->image;
				});

				return Response::json($platos);

			}elseif ($eleccion == 2) {
				$tragos = App\Beverage::all();
				$tragos->each(function($tragos){
					$tragos->image;
				});

				return Response::json($tragos);

			}elseif($eleccion == 3
				){

				$bebidas = App\Drink::all();

				return Response::json($bebidas);


			}elseif ($eleccion == 4) {

				$jugos = App\Juice::all();
				$jugos->each(function($jugos){
					$jugos->image;
				});

				return Response::json($jugos);

			}
		});
	Route::get('comandas/{id}/lista', [
			'uses' => 'CommandsController@ready',
			'as' => 'admin.comandas.lista'
			]);
	Route::get('platos-del-dia', [
			'uses' => 'PortalController@index',
			'as'   => 'admin.platos-del-dia'
		]);
	Route::post('guardar-platos-dia', [
			'uses' => 'PortalController@save',
			'as'   => 'admin.guardar-platos-dia'
		]);




	//LICORES BEBIDAS

	Route::get('tragos/create/liqueurs/{type}',  function($type){
		$liqueur = App\Liqueur::where('type_id', $type)->get();
		return Response::json($liqueur);
	});

	Route::get('tragos/create/addliqueur/{id_l}', function($id_l){
		$liqueur = App\Liqueur::where('id', $id_l)->get();

		$units = App\Unit::all();

		return Response::json(array('liqueur' => $liqueur, 'units' => $units));
	});

	// INGREDIENTES BEBIDAS

	Route::get('tragos/create/ingredients/{type}',  function($type){
		$ingredients = App\Ingredient::where('id_type', $type)->get();
		return Response::json($ingredients);
	});
	Route::get('tragos/create/addingredient/{id_i}', function($id_i){
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

	//INGREDIENTES SALSAS

	Route::get('jugos/create/ingredients/{type}',  function($type){
		$ingredients = App\Ingredient::where('id_type', $type)->get();
		return Response::json($ingredients);
	});
	Route::get('jugos/create/addingredient/{id_i}', function($id_i){
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
