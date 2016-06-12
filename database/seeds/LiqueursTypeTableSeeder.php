<?php

use Illuminate\Database\Seeder;

class LiqueursTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('liqueurs_types')->insert(array (
        	'tipo_licor' => 'Ron'
        ));

           \DB::table('liqueurs_types')->insert(array (
        	'tipo_licor' => 'Vino'
        ));

       	\DB::table('liqueurs_types')->insert(array (
        	'tipo_licor' => 'Vodka'
        ));

        \DB::table('liqueurs_types')->insert(array (
        	'tipo_licor' => 'Whiskey'
        ));

        \DB::table('liqueurs_types')->insert(array (
        	'tipo_licor' => 'Brandi'
        ));

    }
}
