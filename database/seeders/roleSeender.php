<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class roleSeender extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'User']);

        Permission::create(['name' => 'index', 'descripcion'=>'ver usuarios'])->syncRoles($role);
        Permission::create(['name' => 'create', 'descripcion'=>'crear usuarios'])->syncRoles($role);
        Permission::create(['name' => 'edit', 'descripcion'=>'editar usuarios'])->syncRoles($role);
        Permission::create(['name' => 'destroy', 'descripcion'=>'eliminar usuarios'])->syncRoles($role);
        Permission::create(['name' => 'admin user', 'descripcion'=>'administrar usuarios'])->syncRoles($role);
       
    }
}


