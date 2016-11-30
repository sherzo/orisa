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
     'plato', 'descripcion', 'precio', 'image_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $table = 'plates';

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function Ingredientes()
    {
        return $this->belongsToMany('App\Ingredient', 'plates_has_ingredients', 'plato_id', 'ingrediente_id')->withPivot( 'cantidad_ingrediente');
    }

    public function Licores()
    {
        return $this->belongsToMany('App\Liqueur', 'plates_has_liqueurs')->withPivot( 'cantidad_licor', 'unit_id');
    }

    public function UnidadesIngredientes()
    {
       return $this->belongsToMany('App\Unit', 'plates_has_ingredients', 'plato_id', 'unit_id');
    }

    public function UnidadesLicores()
    {
       return $this->belongsToMany('App\Unit', 'plates_has_liqueurs');
    }

    public function Salsas()
    {
      return $this->belongsToMany('App\Sauce', 'plates_has_sauces', 'plato_id', 'salsa_id');
    }

}
