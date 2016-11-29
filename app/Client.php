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
    protected $fillable = ['dni_cedula', 'nombre', 'direccion', 'operadora', 'telefono', 'tipo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $table = 'clients';

    public function commands()
    {
        return $this->belongsToMany('App\Command', 'commands_has_clients')->withPivot('subtotal', 'total');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'users_vip');
    }

    public function scopeCedula($query, $cedula)
    {
       $query->where('dni_cedula', $cedula);

    }
}
