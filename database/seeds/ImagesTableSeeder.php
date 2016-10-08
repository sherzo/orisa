<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	for ($i=1; $i <=23 ; $i++) { 
    	
        \DB::table('images')->insert(array (
            'imagen' => $i.'.jpg',
        ));

    	}

    	// Del 1 al 13 PLATOS
    	// Del 13 al 19 TRAGOS
    	// Del 19 al 23 JUGOS
    }
}
