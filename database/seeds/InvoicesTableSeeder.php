<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=1; $i<20; $i++)
      {
          \DB::table('commands')->insert(array (
            'estatus' => 'Procesada',
            'table_id' => '1',
            'employee_id' => '5',
          ));

          for ($j=1; $j < 4; $j++) {

          \DB::table('commands_has_plates')->insert(array (
            'command_id' => $i,
            'plate_id' => $j,
            'estatus' => 'Procesada',
          ));

          }

          \DB::table('invoices')->insert(array (
            'command_id' => $i,
            'client_id' => '4',
            'subtotal' =>   '13600',
            'total' =>  '15912',
          ));

        }
    }
}
