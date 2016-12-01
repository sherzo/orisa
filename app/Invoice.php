<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  protected $table = 'invoices';
  protected $fillable = ['sutotal', 'total'];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */

  public function cliente()
  {
    return $this->belongsTo('App\Client');
  }

  public function comanda()
  {
    return $this->belongsTo('App\Command');
  }
}
