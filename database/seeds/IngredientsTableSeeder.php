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
            'id_type'        => '1',
            'id_unit'        => '1',
            'ingrediente'    => 'Harina Pan',
            'stock'          => '0',
        	'caracteristica' => 'Precocida',
            'stock_min'      => '20',
        ));

        \DB::table('providers_has_ingredients')->insert(array (
            'ingrediente_id' => '1',
        	'proveedor_id'   => '1',
        ));

        \DB::table('providers_has_ingredients')->insert(array (
            'ingrediente_id' => '1',
        	'proveedor_id'   => '2',
        ));

        \DB::table('ingredients')->insert(array (
            'id_type'        => '4',
            'id_unit'        => '4',
            'ingrediente'    => 'Maceite',
            'stock'          => '0',
        	'caracteristica' => 'Aceite de soya',
            'stock_min'      => '20',

        ));

        \DB::table('providers_has_ingredients')->insert(array (
          'ingrediente_id' => '2',
        	'proveedor_id'   => '1',
        ));

        \DB::table('providers_has_ingredients')->insert(array (
          'ingrediente_id' => '2',
        	'proveedor_id'   => '2',
        ));
    }
}
