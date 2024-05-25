<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Création du rôle admin
        Role::create([
            'name' => 'admin',
        ]);

        // Création du rôle manager
        Role::create([
            'name' => 'manager',
        ]);
    }
}


