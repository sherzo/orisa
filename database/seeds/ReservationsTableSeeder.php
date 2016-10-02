<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reservations')->insert(array (
	            'client_id' => '11',
	            'table_id' => '1',
	            'fecha_solicitud' => '2016-09-30',
	            'fecha_reservacion' => '2016-09-30',
	            'hora_reservacion' => '9:00:00',
	    ));

	    \DB::table('reservations')->insert(array (
	            'client_id' => '11',
	            'table_id' => '2',
	            'fecha_solicitud' => '2016-09-30',
	            'fecha_reservacion' => '2016-09-30',
	            'hora_reservacion' => '9:00:00',
	    ));

    }
}
