use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run(): void {
        Category::insert([
            ['name' => 'Interactive Multimedia'],
            ['name' => 'Software Engineering'],
        ]);
    }
}
