<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status',  
    ];

    protected $table = 'purchases';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
	public function purchase_ingredients()
    {
        return $this->hasMany('App\Purchase_has_ingredient', 'id_purchase', 'id');
    }

}
