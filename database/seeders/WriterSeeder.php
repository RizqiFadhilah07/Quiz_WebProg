<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('writers')->insert([
            ['writers_id'=>1,'name' => 'Doni Rizqi', 'bio' => 'Expert in Interactive Design'],
            ['writers_id'=>2,'name' => 'Andi Pratama', 'bio' => 'Software Engineer & Agile Practitioner'],
        ]);
    }
}
