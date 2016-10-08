<?php

use Illuminate\Database\Seeder;

class PlatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('plates')->insert(array (
            'plato' => 'Arroz',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '3200',
            'image_id' => '1',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Asado',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '3900',
            'image_id' => '2',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Bistec',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '3500',
            'image_id' => '3',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Boloña',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '3000',
            'image_id' => '4',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Caraota',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '3500',
            'image_id' => '5',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Crouse',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4600',
            'image_id' => '6',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Espagueti',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4000',
            'image_id' => '7',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Tarta',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '2900',
            'image_id' => '8',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Parrilla',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4500',
            'image_id' => '9',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Pasticho',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4300',
            'image_id' => '10',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Pollo',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4500',
            'image_id' => '11',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Pechuga',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '4500',
            'image_id' => '12',
        ));

        \DB::table('plates')->insert(array (
            'plato' => 'Tequeños',
            'descripcion' => 'Plato de arroz con abichuela',
            'precio' => '1900',
            'image_id' => '13',
        ));

    }
}
