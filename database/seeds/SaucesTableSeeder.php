<?php

use Illuminate\Database\Seeder;

class SaucesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sauces')->insert(array (
            'salsa' => 'Napolitana',
        ));

        \DB::table('sauces')->insert(array (
            'salsa' => 'Boloñesa',
        ));

        \DB::table('sauces')->insert(array (
            'salsa' => 'Bechamel',
        ));
    }
}
