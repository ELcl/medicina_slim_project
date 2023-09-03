<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Importación de las clases para el sembrado
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Slim',
            'email' => 'slimumsa@dipgis.umsa.bo',
            'password' => bcrypt('Sl1mums4'),
        ]);

        User::create([
            'name' => 'Interno',
            'email' => 'interno_medicina2023@gmail.com',
            'password' => bcrypt('C0ntr4señ4'),
        ]);
    }
}
