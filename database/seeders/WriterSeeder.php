use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder {
    public function run(): void {
        Writer::insert([
            ['name' => 'Doni Rizqi', 'bio' => 'Expert in Interactive Design'],
            ['name' => 'Andi Pratama', 'bio' => 'Software Engineer & Agile Practitioner'],
        ]);
    }
}
