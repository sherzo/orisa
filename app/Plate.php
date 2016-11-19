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
        return $this->belongsTo('App\Ingredient', 'Plates_has_ingredients')->withPivot('cantidad'); 
    }



}
