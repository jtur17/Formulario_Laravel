<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post::factory()
        //     ->hasUser()
        //     ->count(2) 
        //     ->create();

        Post::create([
            'titulo' => 'Título del Primer Post',
            'extracto' => 'Extracto del Primer Post',
            'contenido' => 'Contenido del Primer Post',
            'caducable' => true,
            'comentable' => true,
            'user_id' => 1,
        ]);
        
        Post::create([
            'titulo' => 'Título del Segundo Post',
            'extracto' => 'Extracto del Segundo Post',
            'contenido' => 'Contenido del Segundo Post',
            'caducable' => false,
            'comentable' => false,
            'user_id' => 2,
        ]);
        
    }
}
