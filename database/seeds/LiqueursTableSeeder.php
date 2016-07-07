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
            'nombre_licor' => 'Carta roja',
        	'id_type' => '1',
        	'caracteristica' => 'añejo',      	
        	'id_unit' => '5',
        ));

        \DB::table('liqueurs_providers')->insert(array (
            'id_liqueur' => '1',
        	'id_provider' => '1',        	
        ));

        \DB::table('liqueurs_providers')->insert(array (
            'id_liqueur' => '1',
        	'id_provider' => '2',        	
        ));

        \DB::table('liqueurs')->insert(array (
            'nombre_licor' => 'Cacique',
        	'id_type' => '1',
        	'caracteristica' => 'añejo',      	
        	'id_unit' => '5',
        ));

        \DB::table('liqueurs_providers')->insert(array (
            'id_liqueur' => '2',
        	'id_provider' => '1',        	
        ));

        \DB::table('liqueurs_providers')->insert(array (
            'id_liqueur' => '2',
        	'id_provider' => '2',        	
        ));
    }
}
