<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\WriterSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategoriesSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        Course::create([
            'title' => 'Human and Computer Interaction',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 1,
            'content' => 'Human-computer interaction (HCI) is an interdisciplinary field that studies how people use and interact with computers and technology. It involves designing, evaluating, and implementing computer systems with a focus on user-friendliness, efficiency, and satisfaction by combining principles from computer science, psychology, and design. The goal of HCI is to create technology that is intuitive and better meets users needs.',
            'courseImage' => 'hci.jpg',
            'published_at' => now()
        ]);
        Course::create([
            'title' => 'User Experience for Digital Immersive Technology',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 1,
            'content' => 'In a world where screens have long dictated how we interact with digital content, the arrival of Augmented Reality (AR) and Virtual Reality (VR) marks a paradigm shift. What was once a two-dimensional experience bound by device limitations is now transforming into immersive, interactive environments that redefine user expectations. As industries evolve, the importance of compelling UI/UX design services has become more critical than ever — and the integration of AR and VR technologies is leading the next revolution.',
            'courseImage' => 'img_multimedia_1.jpg',
            'published_at' => now()
        ]);
        Course::create([
            'title' => 'User Experience',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 1,
            'content' => 'Our unique value in enabling digital workplaces is simple. Endpoint Central is one platform for all endpoint needs. Layering experience analytics on top of deep asset visibility and the automation capabilities of our UEM platform, we help end-user computing (EUC) teams investigate and heal DEX issues faster, without any extra setup.',
            'courseImage' => 'user_experience.jpg',
            'published_at' => now()
        ]);
        Course::create([
            'title' => 'Pattern Software Design',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 2,
            'content' => 'Welcome to my article, Design Patterns Overview. Design patterns have fascinated me for years. They’re like personal tools you can add to your toolkit as a software developer. They don’t take long to introduce, but they can take much practice to master. This article will explore the concept of design patterns, which you should start learning if you haven’t already. Some of the major topics we will cover include design patterns and where they come from. Why should you spend time teaching them? How should you approach this critical topic? And what are some good patterns to start with? By the end of this article, you’ll understand how design patterns can help you be a more effective software developer and have a proven strategy for learning more about them. I hope we can learn together by joining me on this journey!',
            'courseImage' => 'software_engineering.jpg',
            'published_at' => now()
        ]);
        Course::create([
            'title' => 'Agile Software Development',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 2,
            'content' => 'Agile software development is an iterative and incremental approach to software development that emphasizes collaboration, flexibility, and customer satisfaction through the delivery of working software in short cycles called sprints. Instead of a single, long plan, teams break projects into small parts, continuously gather feedback, and adapt to changes, making it a highly dynamic and efficient process compared to traditional methods.',
            'courseImage' => 'agile.jpg',
            'published_at' => now()
        ]);
        Course::create([
            'title' => 'Code Reengineering',
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'category_id' => 2,
            'content' => 'Code reengineering is the process of restructuring or modifying existing source code to improve its quality, efficiency, and maintainability without changing its external behavior. This involves identifying and fixing issues like long methods and large classes (design smells) through techniques like refactoring, to make the code easier to manage and more adaptable to current standards.',
            'courseImage' => 'code_rengineering.jpg',
            'published_at' => now()
        ]);





    }
}
