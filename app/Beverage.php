<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $table = 'beverages';
    protected $fillable = [
     'trago', 'descripcion', 'precio', 'image_id',
    ];
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function Ingredientes()
    {
        return $this->belongsToMany('App\Ingredient', 'beverages_has_ingredients')->withPivot( 'cantidad_ingrediente', 'unit_id');
    }

    public function Licores()
    {
        return $this->belongsToMany('App\Liqueur', 'beverages_has_liqueurs')->withPivot( 'cantidad_licor', 'unit_id');
    }

    public function UnidadesIngredientes()
    {
       return $this->belongsToMany('App\Unit', 'beverages_has_ingredients');
    }

    public function UnidadesLicores()
    {
       return $this->belongsToMany('App\Unit', 'beverages_has_liqueurs');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'Beverages_has_ingredients');
    }

    public function receta()
    {
        return $this->hasMany('App\Beverages_has_ingredient');
    }
}
