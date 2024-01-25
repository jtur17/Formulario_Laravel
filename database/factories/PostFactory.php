<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1,1),
            'titulo' => fake()->sentence(),
            'extracto' => fake()->paragraph(),
            'contenido' => fake()->text(),
            'caducable' => fake()->boolean(),
            'comentable' => fake()->boolean(),
            'acceso' => fake()->randomElement(['publico', 'privado'])
        ];
    }
}
