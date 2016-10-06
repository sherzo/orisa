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

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'Beverages_has_ingredients');
    }

    public function receta()
    {
        return $this->hasMany('App\Beverages_has_ingredient');
    }
}
