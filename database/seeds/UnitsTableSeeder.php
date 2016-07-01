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
        	'unidad' => 'kg'
        ));

        \DB::table('units')->insert(array (
            'unidad' => 'g'
        ));

           \DB::table('units')->insert(array (
        	'unidad' => 'mg'
        ));

       \DB::table('units')->insert(array (
        	'unidad' => 'l'
        ));

        \DB::table('units')->insert(array (
        	'unidad' => 'ml'
        ));
    }
}

