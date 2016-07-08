<?php

use Illuminate\Database\Seeder;

class ShiftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shifts')->insert(array (
		'turno'        => 'Mañana',
		'hora_entrada' => '7:00',
		'hora_salida'  => '15:00'
        ));

        \DB::table('shifts')->insert(array (
		'turno'        => 'Noche',
		'hora_entrada' => '15:00',
		'hora_salida'  => '23:00'
        ));
    }
}
