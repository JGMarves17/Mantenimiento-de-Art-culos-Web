<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $articulos = [
            ['titulo' => 'Admisiones', 'contenido' => 'Proceso de admisiones abierto para el nuevo periodo académico.', 'autor' => 'Admisiones', 'categoria' => 'Admisiones'],
            ['titulo' => 'Matriculate en línea', 'contenido' => 'Ya puedes matricularte en línea desde el portal estudiantil.', 'autor' => 'Registro', 'categoria' => 'Matrícula en línea'],
            ['titulo' => 'Bienvenida a nuevos estudiantes', 'contenido' => 'La USAP da la bienvenida a los estudiantes de primer ingreso.', 'autor' => 'Marco Alemán Watters', 'categoria' => 'Novedades'],
        ];

        foreach ($articulos as $articulo) {
            Post::create($articulo);
        }
    }
}