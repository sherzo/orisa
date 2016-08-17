<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'nombre_plato', 'descripcion', 'precio', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $table = 'plates';


    public function scopeIngredient($query, $data="")
    {
        if($data>0){

            $resultado = $query->where('ingrediente', 'LIKE', '%'.$data.'%');
            
        }else{
           
        }
    }

}
