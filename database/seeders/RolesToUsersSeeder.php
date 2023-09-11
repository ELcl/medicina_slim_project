<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
// Add Role and permission with spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesToUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Asignar un rol a un usuario
        //Root
        $user_1 = User::find(1);
        $rol_1 = Role::where('name','root')->first();
        $user_1->assignRole($rol_1);

        //Admin
        $user_2 = User::find(2);
        $rol_2 = Role::where('name','admin')->first();
        $user_2->assignRole($rol_2);
        
        //Interno
        $user_3 = User::find(3);
        $rol_3 = Role::where('name','interno')->first();
        $user_3->assignRole($rol_3);
    }
}
