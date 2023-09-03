<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Clases necesarias para ejecutar los seeders
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionToRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  ROOT
        //Asiganmos todos los permisos al root
        $role_root = Role::where('name','root')->first();
        $permissions = Permission::pluck('id','id')->all();
        $role_root->syncPermissions($permissions);

        // ADMIN
        $permissions_admin = [
            'dashboard',
            // User
            'users.index',
            'users.create',
            'users.store',
            'users.update',
            'users.destroy',
            //Pacientes
            'pacientes.index',
            // 'pacientes.create',
            // 'pacientes.store',
            // 'pacientes.destroy',
            //Casos
            'casos.index',
            // 'casos.create',
            // 'casos.store',
            // 'casos.destroy',
            //Account
            'logout',
        ];
        $admin = Role::where('name','admin')->first();
        $admin->syncPermissions($permissions_admin);

        // INTERNO
        $permissions_in = [
            // interno
            'dashboard',
            //Pacientes
            'pacientes.index',
            'pacientes.create',
            'pacientes.store',
            'pacientes.update',
            'pacientes.destroy',
            //Casos
            'casos.index',
            'casos.create',
            'casos.store',
            'casos.update',
            'casos.destroy', 
            //Account
            'logout',
        ];
        $interno = Role::where('name','interno')->first();;
        $interno->syncPermissions($permissions_in);
    }
}