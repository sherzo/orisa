<?php

use Illuminate\Database\Seeder;

class IngredientsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Harinas'
        ));

        \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Carnes'
        ));

        \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Frutas'
        ));

        \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Verduras'
        ));

        \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Legumbres'
        ));

        \DB::table('ingredients_types')->insert(array (
        	'tipo_ingrediente' => 'Condimentos'
        ));

    }
}
