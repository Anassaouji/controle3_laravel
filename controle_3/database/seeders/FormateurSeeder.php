<?php

namespace Database\Seeders;

use App\Models\OneToOne\Formateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formateur::factory(80)->create();
        
    }
}
