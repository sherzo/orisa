<?php

use Illuminate\Database\Seeder;

class LiqueursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('liqueurs')->insert(array (
            'tlicor_id'      => '1',
            'id_unit'        => '5',
            'nombre_licor'   => 'Carta roja',
        	'caracteristica' => 'Añejo',      	
        	
        ));

        \DB::table('providers_has_liqueurs')->insert(array (
            'licor_id'     => '1',
        	'proveedor_id' => '1',        	
        ));

        \DB::table('providers_has_liqueurs')->insert(array (
            'licor_id'     => '1',
        	'proveedor_id' => '2',        	
        ));

        \DB::table('liqueurs')->insert(array (
            'tlicor_id'      => '1',
            'id_unit'        => '5',
            'nombre_licor'   => 'Cacique',
        	'caracteristica' => 'Añejo',      	
        	
        ));

        \DB::table('providers_has_liqueurs')->insert(array (
            'licor_id'     => '2',
        	'proveedor_id' => '1',        	
        ));

        \DB::table('providers_has_liqueurs')->insert(array (
            'licor_id'     => '2',
        	'proveedor_id' => '2',        	
        ));
    }
}
