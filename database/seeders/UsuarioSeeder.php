<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 4 usuarios con rol 'user'
        Usuario::factory(10)->create();

        // Generar 1 usuario con rol 'admin'
        Usuario::factory()->create([
            'role' => 'admin'
        ]);
    }
}
