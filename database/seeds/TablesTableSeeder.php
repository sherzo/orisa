<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 12; $i++) { 

	        \DB::table('tables')->insert(array (
	            'numero_mesa' => $i,
	        ));
	        
    	}
    }
}
