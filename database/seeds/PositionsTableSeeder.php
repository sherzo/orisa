<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('positions')->insert(array (
            'name_position' => 'chef',
            'salary_month' => '15000',
        	'time_ordinary' => '15'
        ));

		 \DB::table('positions')->insert(array (
            'name_position' => 'mesero',
            'salary_month' => '12000',
        	'time_ordinary' => '15'
        ));
    }
}
