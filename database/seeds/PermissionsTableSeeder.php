<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users

        Permission::create([
        	'name'        => 'Navegar usuarios',
        	'slug'        => 'users.index',
        	'description' =>'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name'        => 'ver detalle de usuario',
        	'slug'        => 'users.show',
        	'description' =>'ver en detalle aca usuario del sistema',
        ]);


        Permission::create([
        	'name'        => 'Edicion de roles',
        	'slug'        => 'users.edit',
        	'description' =>'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
        	'name'        => 'Eliminar usuario',
        	'slug'        => 'users.destroy',
        	'description' =>'Eliminar cualquier usuario del sistema',
        ]);


        //roles

        Permission::create([
        	'name'        => 'Navegar usuario roles',
        	'slug'        => 'roles.index',
        	'description' =>'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name'        => 'ver detalle de rol',
        	'slug'        => 'roles.show',
        	'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
        	'name'        => 'Creacion de roles',
        	'slug'        => 'roles.create',
        	'description' =>'Editar cualquier dato de un rol del sistema',
        ]);


        Permission::create([
        	'name'        => 'Edicion de roles',
        	'slug'        => 'roles.edit',
        	'description' =>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar rol',
        	'slug'        => 'roles.destroy',
        	'description' =>'Eliminar cualquier rol del sistema',
        ]);




        //events

        Permission::create([
        	'name'        => 'Navegar usuario events',
        	'slug'        => 'events.index',
        	'description' =>'Lista y navega todos los events del sistema',
        ]);

        Permission::create([
        	'name'        => 'ver detalle de event',
        	'slug'        => 'events.show',
        	'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
        	'name'        => 'Creacion de events',
        	'slug'        => 'events.create',
        	'description' =>'Editar cualquier dato de un event del sistema',
        ]);


        Permission::create([
        	'name'        => 'Edicion de events',
        	'slug'        => 'events.edit',
        	'description' =>'Editar cualquier dato de un event del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar event',
        	'slug'        => 'events.destroy',
        	'description' =>'Eliminar cualquier event del sistema',
        ]);






       

    }
}
