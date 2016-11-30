<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juice extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'jugo', 'descripcion', 'precio', 'image_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'juices';

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function Ingredientes()
    {
        return $this->belongsToMany('App\Ingredient', 'juices_has_ingredients')->withPivot('cantidad_ingrediente', 'unit_id');
    }

    public function UnidadesIngredientes()
    {
       return $this->belongsToMany('App\Unit', 'juices_has_ingredients');
    }

}
