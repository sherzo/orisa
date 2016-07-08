<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'cedula', 'nombre', 'direccion', 'telefono', 'correo', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'clients';


    public function scopeCedula($query, $cedula)
    {
       $query->where('cedula', $cedula);

    }
}
