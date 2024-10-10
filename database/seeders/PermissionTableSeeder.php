<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

    public function run()
    {
        $role = Role::create(['name' => 'SuperAdmin']);

        $role2 = Role::create(['name' => 'Administrador']);

        $role3 = Role::create(['name' => 'Alumno']);


        Permission::create(['name' => 'Ver Usuarios'])->syncRoles([$role]);
        Permission::create(['name' => 'Crear Usuario'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Usuario'])->syncRoles([$role]);
        Permission::create(['name' => 'Borrar Usuario'])->syncRoles([$role]);
        Permission::create(['name' => 'Ver Roles'])->syncRoles([$role]);
        Permission::create(['name' => 'Crear Rol'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Rol'])->syncRoles([$role]);
        Permission::create(['name' => 'Borrar Rol'])->syncRoles([$role]);
        Permission::create(['name' => 'Ver Profesores'])->syncRoles([$role]);
        Permission::create(['name' => 'Crear Profesor'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Profesor'])->syncRoles([$role]);
        Permission::create(['name' => 'Borrar Profesor'])->syncRoles([$role]);
        Permission::create(['name' => 'Ver Eventos'])->syncRoles([$role]);
        Permission::create(['name' => 'Crear Evento'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Evento'])->syncRoles([$role]);
        Permission::create(['name' => 'Borrar Evento'])->syncRoles([$role]);
        Permission::create(['name' => 'Ver Actividad'])->syncRoles([$role]);
        Permission::create(['name' => 'Crear Actividad'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Actividad'])->syncRoles([$role]);
        Permission::create(['name' => 'Borrar Actividad'])->syncRoles([$role]);

        Permission::create(['name' => 'Crear Inicio'])->syncRoles([$role3]);
        Permission::create(['name' => 'Editar Inicio'])->syncRoles([$role3]);
        Permission::create(['name' => 'Crear Activi'])->syncRoles([$role3]);
        Permission::create(['name' => 'Crear Aviso'])->syncRoles([$role3]);

        Permission::create(['name' => 'Crear Formulario'])->syncRoles([$role]);
        Permission::create(['name' => 'Editar Formulario '])->syncRoles([$role3]);

    }
}
