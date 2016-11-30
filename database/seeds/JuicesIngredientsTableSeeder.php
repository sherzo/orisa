<?php

use Illuminate\Database\Seeder;

class JuicesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 4; $i++) {

	        \DB::table('juices_has_ingredients')->insert(array (
	            'juice_id' => $i,
	            'ingredient_id' => '1',
	            'cantidad_ingrediente' => $i.'0',
	            'unit_id' => '2',
	        ));

    	}
    }
}
