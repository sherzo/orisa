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
    protected $fillable = ['dni_cedula', 'nombre', 'direccion', 'operadora', 'telefono', 'tipo', 'correo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'clients';

    public function commands()
    {
        return $this->belongsToMany('App\Command', 'invoices')->withPivot('subtotal', 'total');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'email');
    }

    public function scopeCedula($query, $cedula)
    {
       $query->where('dni_cedula', $cedula);

    }
}
