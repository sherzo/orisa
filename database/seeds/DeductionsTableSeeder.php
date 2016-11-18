<?php

use Illuminate\Database\Seeder;

class DeductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('deductions')->insert(array (
            'ISLR' => '0.00',
            'SSO'  => '0.04',
        	'RPE'  => '0.005',
        	'RPVH' => '0.01'
        ));
    }
}

