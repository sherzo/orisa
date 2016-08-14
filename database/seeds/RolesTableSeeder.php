<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(array (
			'rol'          => 'SuperUsuario',
			'abreviatura'  => 'SuperSU',
			'descripcion'  => 'Acceso a todos los módulos, con opción a ver, editar y eliminar.',
			'nivel' 	   => '1',

        ));

        \DB::table('roles')->insert(array(
        	'rol'          => 'Administrador',
			'abreviatura'  => 'Admin',
			'descripcion'  => 'Gestión de usuarios, privilegios, auditoria, recuperación y restauración de base de datos.',
			'nivel' 	   => '2',
        ));

        \DB::table('roles')->insert(array(
        	'rol'          => 'Tipo 1',
			'abreviatura'  => 'Usuario',
			'descripcion'  => 'Gestión de proveedores, clientes, facturación, empleados, nomina, con opción a ver, crear y  modificar.',
			'nivel' 	   => '3',
        ));

        \DB::table('roles')->insert(array(
        	'rol'          => 'Tipo 2',
			'abreviatura'  => 'Usuario',
			'descripcion'  => 'Gestión de clientes y factura, con opción a registrar y visualizar.',
			'nivel' 	   => '4',
        ));

        \DB::table('roles')->insert(array(
        	'rol'          => 'Tipo 3',
			'abreviatura'  => 'Usuario',
			'descripcion'  => 'Gestión de servicios, pedidos de los clientes.',
			'nivel' 	   => '5',
        ));

        \DB::table('roles')->insert(array(
        	'rol'          => 'Tipo 4',
			'abreviatura'  => 'Usuario',
			'descripcion'  => 'Gestión de servicios, pedidos de los clientes.',
			'nivel' 	   => '6',
        ));

        \DB::table('roles')->insert(array(
            'rol'          => 'Tipo 5',
            'abreviatura'  => 'Usuario',
            'descripcion'  => 'Reservaciones de mesas.',
            'nivel'        => '7',
        ));
    }
}
