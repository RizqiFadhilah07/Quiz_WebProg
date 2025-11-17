<?php

namespace Database\Factories;

use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Symfony\Component\Clock\now;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'writer_id'=> Writer::factory(),
            'category_id' => Category::factory(),
            'content' => fake()->text(),
            'published_at'=>now(),
            'courseImage' => fake()->randomElement([
            'hci.jpg',
            'software_engineering.jpg',
            'agile.jpg',
            'user_experience.jpg',
            ]),

        ];
    }
}
