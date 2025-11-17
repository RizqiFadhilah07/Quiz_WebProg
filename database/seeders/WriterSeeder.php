<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::insert([
            'name' => 'Kicul Mania',
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'writerImage' => 'writer1.jpg',
            'specialization' => 'UI/UX'
        ]);
        Writer::insert([
            'name' => 'Dewi Sartika',
            'writerImage' => 'writer2.jpg',
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'specialization' => 'Software Engineering'
        ]);
        Writer::insert([
            'name' => 'Sofia the First',
            'writerImage' => 'writer3.jpg',
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->safeEmail(),
            'specialization' => 'Multimedia'
        ]);
    }
}
