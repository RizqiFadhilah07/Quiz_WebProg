<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('courses')->insert([
            [
                'title' => 'Human and Computer Interaction',
                'content' => 'Belajar dasar interaksi antara manusia dan komputer...',
                'category_id' => 1,
                'writer_id' => 1,
                'published_at' => now()
            ],
            [
                'title' => 'User Experience Design',
                'content' => 'Mempelajari bagaimana merancang pengalaman pengguna...',
                'category_id' => 1,
                'writer_id' => 1,
                'published_at' => now()
            ],
            [
                'title' => 'Agile Software Development',
                'content' => 'Pendekatan agile untuk membangun perangkat lunak modern...',
                'category_id' => 2,
                'writer_id' => 2,
                'published_at' => now()
            ],
        ]);
    }
}
