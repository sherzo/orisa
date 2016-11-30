<?php

use Illuminate\Database\Seeder;

class PlatesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($i=1; $i <= 13; $i++) {

	        \DB::table('plates_has_ingredients')->insert(array (
	            'plato_id' => $i,
	            'ingrediente_id' => '1',
	            'cantidad_ingrediente' => $i.'0',
	            'unit_id' => '2',
	        ));

    	}
    }
}
