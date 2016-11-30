<?php

use Illuminate\Database\Seeder;

class BeveragesLiqueursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 6; $i++) {

	        \DB::table('beverages_has_liqueurs')->insert(array (
	            'beverage_id' => $i,
	            'liqueur_id' => '1',
	            'cantidad_licor' => $i.'0',
	            'unit_id' => '4',
	        ));

    	}
    }
}
