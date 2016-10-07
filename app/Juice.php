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

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'juices_has_ingredients');
    }

}
