use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder {
    public function run(): void {
        Course::insert([
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
