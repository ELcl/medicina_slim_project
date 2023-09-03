<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Import permission model by spatie
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dashboard
        Permission::create(['name' => 'dashboard']);
        //Account
        Permission::create(['name' => 'logout']);
        Permission::create(['name' => 'profile.update']);
        // User
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.update']);
        Permission::create(['name' => 'users.destroy']);
        // Paciente
        Permission::create(['name' => 'pacientes.index']);
        Permission::create(['name' => 'pacientes.create']);
        Permission::create(['name' => 'pacientes.store']);
        Permission::create(['name' => 'pacientes.update']);
        Permission::create(['name' => 'pacientes.destroy']);
        // Casos
        Permission::create(['name' => 'casos.index']);
        Permission::create(['name' => 'casos.create']);
        Permission::create(['name' => 'casos.store']);
        Permission::create(['name' => 'casos.update']);
        Permission::create(['name' => 'casos.destroy']);
    }
}