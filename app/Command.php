<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
     'estatus', 'table_id', 'employee_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function client()
    {
        return $this->belongsToMany('App\Client', 'invoices')->withPivot('subtotal', 'total');
    }

    public function table()
    {
        return $this->belongsTo('App\Table');
    }

    public function plates()
    {
        return $this->belongsToMany('App\Plate', 'commands_has_plates');
    }

    public function beverages()
    {
        return $this->belongsToMany('App\Beverage', 'commands_has_beverages');
    }

    public function drinks()
    {
        return $this->belongsToMany('App\Drink', 'commands_has_drinks');
    }

    public function juices()
    {
        return $this->belongsToMany('App\Juice', 'commands_has_juices');
    }

    public function empleado()
    {
      return $this->belongsTo('App\Employee');
    }

}
