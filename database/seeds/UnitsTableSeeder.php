<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->insert(array (
        	'unidad' => 'KG'
        ));

        \DB::table('units')->insert(array (
            'unidad' => 'G'
        ));

       \DB::table('units')->insert(array (
        	'unidad' => 'L'
        ));

        \DB::table('units')->insert(array (
        	'unidad' => 'ML'
        ));
    }
}
