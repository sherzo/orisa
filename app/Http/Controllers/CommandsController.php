<?php

namespace App\Http\Controllers;

use App\Command;
use App\Http\Requests;
use App\Reservation;
use App\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('admin.comandas.index', compact('mesas'));
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
    	$mesa = Table::find($request->table_id);
    	$mesa->estatus = 'Ocupada';
    	$mesa->save();
        $comanda = new Command($request->all());
        $comanda->employee_id = "10";
        $comanda->save();

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

        return redirect('admin/comandas/en-espera');
    }

    public function hold()
    {	
    	$commands = Command::all();
    	$commands->each(function($commands){
    		$commands->plates;
    		$commands->beverages;
    		$commands->drinks;
    		$commands->juices;
    	});

    	return view('admin.comandas.commands-waiting', compact('commands'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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