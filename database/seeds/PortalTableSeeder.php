<?php

use Illuminate\Database\Seeder;

class PortalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('portals')->insert(array (
        'estatus'          => true,
      ));

      for ($i=1; $i < 7; $i++) {

        \DB::table('plate_portal')->insert(array (
          'plate_id'  => $i,
          'portal_id' => 1,
        ));

      }
    }
}
