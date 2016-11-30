<?php

use Illuminate\Database\Seeder;

class CestaticketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cestaticket')->insert(array (
            'unidad_tributaria' => '177.00',
            'cantidad' => '12',
        ));
    }
}
