<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	\DB::table('ingredients')->insert(array (
            'nombre_ingrediente' => 'harina pan',
        	'id_type' => '1',
        	'caracteristica' => 'precocida',      	
        	'id_unit' => '1',
        ));

        \DB::table('ingredients_providers')->insert(array (
            'id_ingredient' => '1',
        	'id_provider' => '1',        	
        ));

        \DB::table('ingredients_providers')->insert(array (
            'id_ingredient' => '1',
        	'id_provider' => '2',        	
        ));

        \DB::table('ingredients')->insert(array (
            'nombre_ingrediente' => 'Maceite',
        	'id_type' => '4',
        	'caracteristica' => 'aceite de soya',      	
        	'id_unit' => '4',
        ));

        \DB::table('ingredients_providers')->insert(array (
            'id_ingredient' => '2',
        	'id_provider' => '1',        	
        ));

        \DB::table('ingredients_providers')->insert(array (
            'id_ingredient' => '2',
        	'id_provider' => '2',        	
        ));
    }
}
