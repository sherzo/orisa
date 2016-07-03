<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Ingredient;
use App\Purchase;
use App\Purchase_has_ingredient;
use App\Purchase_has_liqueurs;
use App\Unit;
use Laracasts\Flash\Flash;
use App\Liqueur;
use Carbon\Carbon;

use App\Http\Requests;

class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $providers = Provider::lists('razon_social', 'id');
        
        // Cuando seleciona el proveedor traigo los ingredientes realcionados a el
        $request->proveedor ? $ingredients = Provider::find($request->proveedor)->ingredients()->get() : $ingredients = false;

        // Cuando selecciona el proveedor traigo los licores relacionados a el
        $request->proveedor ? $liqueurs = Provider::find($request->proveedor)->liqueurs()->get() : $liqueurs = false;

    
        // Al Agregar a la compra Ingredientes o Licores
        if(isset($request->add_ingredients) || isset($request->add_liqueurs)){
        
            if(isset($request->add_ingredients)){ 

                foreach ($request->add_ingredients as $key => $value) {
            
                    $data_ingredient[$key] = Ingredient::find($value);
                    $units_i[] = Ingredient::find($value)->unit()->get();

                }

            }else{       
                $data_ingredient = false;
            }

            if(isset($request->add_liqueurs)){

                foreach ($request->add_liqueurs as $key => $value) {   
            
                    $data_liqueur[$key] = Liqueur::find($value);
                    $units_l[] = Liqueur::find($value)->unit()->get();
            
                }

            }else {
                $data_liqueur = false;
            }


        return view('admin.purchases.index', compact('providers', 'ingredients', 'liqueurs', 'data_ingredient', 'data_liqueur', 'units_i', 'units_l'));

        
        }else {

            $data_ingredient = false;
            $data_liqueur = false;
 
        
        }

        return view('admin.purchases.index', compact('providers', 'ingredients', 'liqueurs', 'data_ingredient', 'data_liqueur'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $purchase = new Purchase;
        $date = Carbon::now();
        $purchase->status = '0';
        $purchase->fecha = $date->format('d-m-Y');
        $purchase->save();
  

        if(isset($request->ingredients)){ 
        
            foreach ($request->ingredients as $key => $value) {
                
                $purchase_ingredient = new Purchase_has_ingredient;
                $purchase_ingredient->id_ingredient = $value;
                $purchase_ingredient->id_purchase = $purchase->id;
                $purchase_ingredient->cantidad = $request->cantidad_ingredient[$key];
                $purchase_ingredient->save(); 
            }
        }

        if(isset($request->liqueurs)){
            foreach ($request->liqueurs as $key => $value) {

                $purchase_liqueur = new Purchase_has_liqueurs;
                $purchase_liqueur->id_liqueur = $value;
                $purchase_liqueur->id_purchase = $purchase->id;
                $purchase_liqueur->cantidad = $request->cantidad_liqueur[$key];
                $purchase_liqueur->save();
              
            }
        }
       
    $url = route('admin.compra.show', $purchase->id);

    Flash::success('<strong>Exito!</strong> Se proceso la <strong><a href="'.$url.'" title="Ver orden">Orden de compra</a></strong> correctamente!');

    return redirect('admin/compra');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $purchase = Purchase::find($id);
        $purchase->each(function($purchase){
            $purchase->purchase_ingredients;
            $purchase->purchase_liqueurs;
        });


        
                foreach ($purchase->purchase_ingredients as $key => $value){
                    
                     $ingredients[$key] = Ingredient::find($value->id_ingredient);
                     $units_i[] = Ingredient::find($value->id_ingredient)->unit()->get();
                }
      
//dd($purchase->purchase_ingredients);
        return view('admin.purchases.show', compact('purchase', 'ingredients', 'units_i'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    public function order()
    {
        $purchases = Purchase::paginate(10);
        
        return view('admin.purchases.list', compact('purchases'));

    }
}
