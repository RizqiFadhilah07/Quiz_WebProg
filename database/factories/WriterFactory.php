<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username'=> fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'bio' => fake()->sentence(3),
            'writerImage' => fake()->randomElement([
            'writer1.jpg',
            'writer2.jpg',
            'writer3.jpg',
            ]),
            'specialization' => fake()->randomElement([
            'UI/UX',
            'Software Engineering',
            'Multimedia',
        ]),
        ];
    }
}
