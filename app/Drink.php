<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'bebida', 'descripcion', 'precio', 'image_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $table = 'drinks';

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
