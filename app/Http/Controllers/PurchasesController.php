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

    
        $request->proveedor ? $ingredients = Provider::find($request->proveedor)->ingredients()->get() : $ingredients = false;

        $request->proveedor ? $liqueurs = Provider::find($request->proveedor)->liqueurs()->get() : $liqueurs = false;


    
        if(isset($request->add_ingredients) || isset($request->add_liqueurs)){
        
        if(isset($request->add_ingredients)){ 

        foreach ($request->add_ingredients as $key => $value) {
            
            $data_ingredient[$key] = Ingredient::find($value);
            $units_i[] = Ingredient::find($value)->unit()->get();

            }

        }else {
            $data_ingredient = false;
        }

        if(isset($request->add_liqueurs)){

        foreach ($request->add_liqueurs as $key => $value) {   
            
            $data_liqueur[$key] = Liqueur::find($value);
            $units_l[] = Liqueur::find($value)->unit()->get();
            
            }

        }else {

            $data_liqueur = false;
            $hola = true;
        }


        return view('admin.purchases.index', compact('providers', 'ingredients', 'liqueurs', 'data_ingredient', 'data_liqueur', 'units_i', 'units_l', 'hola'));

        
        }else {

            $data_ingredient = false;
            $data_liqueur = false;
            $hola=true;
        
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
        $purchase->status = '0';
        $purchase->save();
        $compra = $purchase->id;

        if(isset($request->ingredients)){ 
        
            foreach ($request->ingredients as $key => $value) {
                
                $purchase_ingredient = new Purchase_has_ingredient;
                $purchase_ingredient->id_ingredient = $value;
                $purchase_ingredient->id_purchase = $compra;
                $purchase_ingredient->cantidad = $request->cantidad_ingredient[$key];
                $purchase_ingredient->save(); 
            }
        }

        if(isset($request->liqueurs)){
            foreach ($request->liqueurs as $key => $value2) {

                $purchase_liqueur = new Purchase_has_liqueurs;
                $purchase_liqueur->id_liqueur = $value;
                $purchase_liqueur->id_purchase = $compra;
                $purchase_liqueur->cantidad = $request->cantidad_liqueur[$key];
                $purchase_liqueur->save();
              
            }
        }
    Flash::success('<strong>Exito!</strong> Se proceso la orden correctamente!');

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
