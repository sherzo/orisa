<?php

namespace App\Http\Controllers;

use App\Client;
use App\Command;
use App\Http\Requests;
use App\Reservation;
use App\Table;
use App\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class CommandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();

        $fecha = Carbon::now()->format('Y-m-d');
        $reservations = Reservation::where('fecha_reservacion', $fecha)->get();
        $mesas2 = Table::all();


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

        return view('admin.comandas.index', compact('mesas', 'mesas2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $mesa = $request->mesa_id;

        return view('admin.comandas.create', compact('mesa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      if(!$request->cantidad)
      {
        return redirect()->back();

        Flash::error('¡Cuidado! No ha agragado ningun producto');
      }

      if($request->comanda_id){
        $comanda = Command::find($request->comanda_id);
      }else{
        $mesa = Table::find($request->table_id);
      	$mesa->estatus = 'Ocupada';
      	$mesa->save();
          $comanda = new Command($request->all());
          $comanda->employee_id = 10;
          $comanda->save();
      }


        foreach ($request->cantidades as $key => $cantidad) {

            // Recorro segun la cantidad
            for ($i=1; $i <= $cantidad; $i++) {

	            if($request->tipo[$key] == 1){ #Platos

	             	$comanda->plates()->attach($request->producto[$key]);

	            }else if ($request->tipo[$key] == 2) { #Tragos

	            	$comanda->beverages()->attach($request->producto[$key]);

	            }else if($request->tipo[$key] == 3){ # Bebidas

	            	$comanda->drinks()->attach($request->producto[$key]);

	            }else if($request->tipo[$key] == 4){ # Jugos

	            	$comanda->juices()->attach($request->producto[$key]);

	            }
        	}
        }

        bitacora('Registro la comanda',$comanda->id, $comanda->id);

        Flash::success('<strong>Exito </strong> se registro la comanda '.$comanda->id);

        return redirect('admin/comandas/en-espera');
    }

    public function ready($id)
    {
      $comanda = Command::find($id);
      $comanda->estatus = 'Lista';
      $comanda->save();

      $platos = $comanda->plates()->get();
      $tragos = $comanda->beverages()->get();
      $jugos = $comanda->juices()->get();
        // Transforma la unidad a GRAMOS o MILILITROS para hacer la resta
        function transformar($unidad, $valor)
        {
            if($unidad == 1 OR $unidad == 3)
            {
              $valor = $valor * 1000;
              return $valor;
            }else {
              return $valor;
            }
        }

        function destransformar($unidad, $valor) //XD
        {
            if($unidad == 1 OR $unidad == 3)
            {
              $valor = $valor / 1000;
              return $valor;
            }else {
              return $valor;
            }
        }

        function descontar($productos)
        {
          foreach ($productos as $key => $producto) {

            $ingredientes = $producto->Ingredientes()->get();
            foreach ($ingredientes as $key => $ingrediente) {
                  $ingrediente->stock = transformar($ingrediente->id_unit, $ingrediente->stock) - transformar($ingrediente->pivot->unidad_id, $ingrediente->pivot->cantidad_ingrediente);
                  $ingrediente->stock = destransformar($ingrediente->id_unit, $ingrediente->stock);
                  $ingrediente->stock = round($ingrediente->stock, 2);
                  $ingrediente->save();
            }


              if($producto->jugo == null){
                $licores = $producto->Licores()->get();
                foreach ($licores as $key => $licor) {
                      $licor->stock = transformar($licor->id_unit, $licor->stock) - transformar($licor->pivot->unit_id, $licor->pivot->cantidad_licor);
                      $licor->stock = destransformar($licor->id_unit, $licor->stock);
                      $licor->save();
                    }
              }

              if($producto->plato != null)
              {
                $salsas = $producto->salsas()->get();
                foreach($salsas as $salsa)
                {
                  $ingredientes = $salsa->ingredientes()->get();
                  foreach ($ingredientes as $key => $ingrediente) {

                        $ingrediente->stock = transformar($ingrediente->id_unit, $ingrediente->stock) - transformar($ingrediente->pivot->unit_id, $ingrediente->pivot->cantidad_ingrediente);
                        $ingrediente->id_unit == 1 ? $ingrediente->id_unit = 2 : '';
                        $ingrediente->id_unit == 3 ? $ingrediente->id_unit = 4 : '';
                        $ingrediente->save();
                  }
                }
              }
          }//Foreach Producto

        }//Funcion Descontar



        descontar($platos);
        descontar($tragos);
        descontar($jugos);

        bitacora('Comanda lista', $comanda->id, $comanda->id);


        Flash::success('<strong>Exito </strong> el plato comanda'.$comanda->id.' esta lista, el mesonero fue notificado.');

        return redirect()->back();
    }//Ready

    public function add($id)
    {
      $comanda = Command::find($id);
      $mesa = $comanda->table->id;

      return view('admin.comandas.create', compact('mesa', 'comanda'));
    }

    public function hold()
    {

      $date = Carbon::now()->format('Y-m-d');
    	$commands = Command::where('created_at', 'LIKE', $date." %")->whereBetween('estatus', ['En espera', 'Lista'])->get();

    	$commands->each(function($commands){
    		$commands->plates;
    		$commands->beverages;
    		$commands->drinks;
    		$commands->juices;
    	});

        $contador = 0;

    	return view('admin.comandas.commands-waiting', compact('commands', 'contador'));
    }

    public function invoice(Request $request)
    {

        $comanda = Command::find($request->command);
        $fecha = new Carbon($comanda->created_at);
        $fecha = $fecha->format('d-m-Y');

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

        return view('admin.comandas.invoice', compact('comanda', 'platos', 'tragos', 'bebidas', 'jugos', 'date', 'subtotal', 'iva', 'servicio', 'total', 'mesa', 'fecha'));

    }

    public function process_invoice(Request $request){

        $client = Client::find($request->client_id);

        $comanda = Command::find($request->command_id);

        $comanda->estatus = 'Procesada';
        $comanda->save();

        $mesa = $comanda->table;
        $mesa->estatus = 'Disponible';
        $mesa->save();

        $invoice = new Invoice();
        $invoice->client_id = $client->id;
        $invoice->command_id = $comanda->id;
        $invoice->subtotal = $request->subtotal;
        $invoice->total = $request->total;
        $invoice->save();

        $client->commands()->attach([$request->command_id => ['subtotal' => $request->subtotal, 'total' => $request->total]]);

        bitacora('Facturo la comanda', $comanda->id, $comanda->id);

        Flash::success('<strong>Exito! </strong> Se ha procesado la comanda correctamente');

        return redirect('admin/comandas/'.$comanda->id);


    }

    public function process(){

        $comandas = Command::where('estatus', 'Procesada')->get();
        $comandas->each(function($comandas){
            $comandas->client;
        });

        return view('admin.comandas.process_invoice', compact('comandas'));

    }

    public function client_new(Request $request){

        $dni_cedula = $request->literal.$request->cedula;
        $comanda = $request->comanda;

        Flash::info('<strong> INFO </strong> búsqueda con número de cédula '. $dni_cedula .' no se encuentra en la base de datos, proceda a llenar los campos.');

        return view('admin.clients.create', compact('dni_cedula', 'comanda'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comanda = Command::find($id);
        $fecha = new Carbon($comanda->created_at);
        $fecha = $fecha->format('d-m-Y');

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
        $date = new Carbon($comanda->create_at);
        $total = $subtotal + $iva + $servicio;

        return view('admin.comandas.show', compact('comanda', 'platos', 'tragos', 'bebidas', 'jugos', 'date', 'subtotal', 'iva', 'servicio', 'total', 'mesa', 'fecha', 'cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
