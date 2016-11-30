<?php

use Illuminate\Database\Seeder;

class SaucesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <= 3; $i++) {

	        \DB::table('sauces_has_ingredients')->insert(array (
	            'sauce_id' => $i,
	            'ingredient_id' => '1',
	            'cantidad_ingrediente' => $i.'00',
	            'unit_id' => '2',
	        ));

    	}
    }
}
