<?php

use Illuminate\Database\Seeder;

class JuicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('juices')->insert(array (
            'jugo' => 'Naranja',
            'descripcion' => 'Jugos de naranja',
            'precio' => '500',
            'image_id' => '20',
        ));

        \DB::table('juices')->insert(array (
            'jugo' => 'Durazno',
            'descripcion' => 'Jugo de duranzo',
            'precio' => '500',
            'image_id' => '21',
        ));

        \DB::table('juices')->insert(array (
            'jugo' => 'Parchita',
            'descripcion' => 'Jugo de parchita',
            'precio' => '500',
            'image_id' => '22',
        ));

        \DB::table('juices')->insert(array (
            'jugo' => 'Lechoza',
            'descripcion' => 'Jugo de lechoza',
            'precio' => '500',
            'image_id' => '23',
        ));
    }
}
