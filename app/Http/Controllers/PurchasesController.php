<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Ingredient;
use App\Purchase;
use App\Purchase_has_ingredient;
use App\Unit;
use Laracasts\Flash\Flash;

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

    
        $request->proveedor ? $ingredients = Provider::find($request->proveedor)->Ingredientes()->get() : $ingredients = false;

    
        if(isset($request->add_ingrediets)){
        
        foreach ($request->add_ingrediets as $key => $value) {
            $data_ingredient[$key] = Ingredient::find($value);
            $units[] = Ingredient::find($value)->unit()->get();
        }
  


        return view('admin.purchases.index', compact('providers', 'ingredients', 'data_ingredient', 'units'));

        
        }else {
            $data_ingredient = false;
        }

        return view('admin.purchases.index', compact('providers', 'ingredients', 'data_ingredient'));

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
          
        foreach ($request->ingredients as $key => $value) {
            $purchase_ingredient = new Purchase_has_ingredient;
            $purchase_ingredient->id_ingredient = $value;
            $purchase_ingredient->id_purchase = $purchase->id;
            $purchase_ingredient->cantidad = $request->cantidad[$key];
            $purchase_ingredient->save();
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
