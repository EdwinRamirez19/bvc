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
        	'description' => 'Lista y navega todos los events del sistema',
        ]);

        Permission::create([
        	'name'        => 'ver detalle de event',
        	'slug'        => 'events.show',
        	'description' => 'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
        	'name'        => 'Creacion de events',
        	'slug'        => 'events.create',
        	'description' =>'Editar cualquier dato de un event del sistema',
        ]);


        Permission::create([
        	'name'        => 'Edicion de events',
        	'slug'        => 'events.edit',
        	'description' => 'Editar cualquier dato de un event del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar event',
        	'slug'        => 'events.destroy',
        	'description' => 'Eliminar cualquier event del sistema',
        ]);




        //questions

        Permission::create([
            'name'        => 'Navegar usuario questions',
            'slug'        => 'questions.index',
            'description' =>'Lista y navega todos los questions del sistema',
        ]);

        Permission::create([
            'name'        => 'ver detalle de question',
            'slug'        => 'questions.show',
            'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
            'name'        => 'Creacion de questions',
            'slug'        => 'questions.create',
            'description' =>'Editar cualquier dato de un question del sistema',
        ]);


        Permission::create([
            'name'        => 'Edicion de questions',
            'slug'        => 'questions.edit',
            'description' =>'Editar cualquier dato de un question del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar question',
            'slug'        => 'questions.destroy',
            'description' =>'Eliminar cualquier question del sistema',
        ]);



        //schools

        Permission::create([
            'name'        => 'Navegar usuario schools',
            'slug'        => 'schools.index',
            'description' =>'Lista y navega todos los schools del sistema',
        ]);

        Permission::create([
            'name'        => 'ver detalle de school',
            'slug'        => 'schools.show',
            'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
            'name'        => 'Creacion de schools',
            'slug'        => 'schools.create',
            'description' =>'Editar cualquier dato de un school del sistema',
        ]);


        Permission::create([
            'name'        => 'Edicion de schools',
            'slug'        => 'schools.edit',
            'description' =>'Editar cualquier dato de un school del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar school',
            'slug'        => 'schools.destroy',
            'description' =>'Eliminar cualquier school del sistema',
        ]);



        //students

        Permission::create([
            'name'        => 'Navegar usuario students',
            'slug'        => 'students.index',
            'description' =>'Lista y navega todos los students del sistema',
        ]);

        Permission::create([
            'name'        => 'ver detalle de student',
            'slug'        => 'students.show',
            'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
            'name'        => 'Creacion de students',
            'slug'        => 'students.create',
            'description' =>'Editar cualquier dato de un student del sistema',
        ]);


        Permission::create([
            'name'        => 'Edicion de students',
            'slug'        => 'students.edit',
            'description' =>'Editar cualquier dato de un student del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar eventstudent',
            'slug'        => 'students.destroy',
            'description' =>'Eliminar cualquier student del sistema',
        ]);



        //teachers

        Permission::create([
            'name'        => 'Navegar usuario teachers',
            'slug'        => 'teachers.index',
            'description' =>'Lista y navega todos los teachers del sistema',
        ]);

        Permission::create([
            'name'        => 'ver detalle de teacher',
            'slug'        => 'teachers.show',
            'description' =>'ver en detalle aca rol del sistema',
        ]);


        Permission::create([
            'name'        => 'Creacion de teachers',
            'slug'        => 'teachers.create',
            'description' =>'Editar cualquier dato de un teacher del sistema',
        ]);


        Permission::create([
            'name'        => 'Edicion de teachers',
            'slug'        => 'teachers.edit',
            'description' =>'Editar cualquier dato de un teacher del sistema',
        ]);
        Permission::create([
            'name'        => 'Eliminar teacher',
            'slug'        => 'teachers.destroy',
            'description' =>'Eliminar cualquier teacher del sistema',
        ]);










       

    }
}
