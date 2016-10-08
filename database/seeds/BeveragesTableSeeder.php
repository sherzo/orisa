<?php

use Illuminate\Database\Seeder;

class BeveragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('beverages')->insert(array (
            'trago' => 'Cuba libre',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '560',
            'image_id' => '14',
        ));

        \DB::table('beverages')->insert(array (
            'trago' => 'Mojito',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '400',
            'image_id' => '15',
        ));

        \DB::table('beverages')->insert(array (
            'trago' => 'Relative',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '350',
            'image_id' => '16',
        ));

        \DB::table('beverages')->insert(array (
            'trago' => 'Coctel',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '380',
            'image_id' => '17',
        ));

        \DB::table('beverages')->insert(array (
            'trago' => 'Naiguata',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '600',
            'image_id' => '18',
        ));

        \DB::table('beverages')->insert(array (
            'trago' => 'Vodka',
            'descripcion' => 'Bebida con alcohol',
            'precio' => '500',
            'image_id' => '19',
        ));
    }
}
