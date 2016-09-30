<?php

use Illuminate\Database\Seeder;

class DrinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('drinks')->insert(array (
            'id_unit'          => '4',
            'bebida'           => 'Sonfil',
            'precio'           => '500', 
            'stock'            => '0',
            'caracteristica'   => 'Naranja',
            'stock_min'        => '20',
                	
        ));

        \DB::table('providers_has_drinks')->insert(array (
            'bebida_id'      => '1',
        	'proveedor_id'   => '1',        	
        ));

        \DB::table('providers_has_drinks')->insert(array (
            'bebida_id'      => '1',
        	'proveedor_id'   => '2',        	
        ));

        \DB::table('drinks')->insert(array (
            'id_unit'          => '4',
            'bebida'           => 'Yukery',
            'precio'           => '1200',
            'stock'            => '0',  
            'caracteristica'   => 'Naranja',
            'stock_min'        => '20',    	
        ));

        \DB::table('providers_has_drinks')->insert(array (
            'bebida_id'      => '2',
        	'proveedor_id'   => '1',        	
        ));

        \DB::table('providers_has_drinks')->insert(array (
            'bebida_id'      => '2',
        	'proveedor_id'   => '2',        	
        ));
    }
}
