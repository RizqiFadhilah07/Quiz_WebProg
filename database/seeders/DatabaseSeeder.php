<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\WriterSeeder;
use Database\Seeders\CategoriesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([WriterSeeder::class,]);
        // $this->call([CourseSeeder::class,]);
        // $this->call([CategoriesSeeder::class,]);

         $this->call([CategoriesSeeder::class,WriterSeeder::class, CourseSeeder::class]);

        Course::factory()->recycle([
            // Category::all(),
            // Writer::all(),
            // Course::all()
        ])->create();
    }
    }
