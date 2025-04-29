</php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reader;
use App\Models\Book;
use App\Models\Review;
use App\Models\BookClub;
use App\Models\Membership;
use App\Models\Creation;
use App\Models\Comment;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Reader::factory(10)->create()->each(function ($reader) {
            $reader->profile()->create([
                'bio' => 'This is a bio for ' . $reader->name
            ]);
        });

        Book::factory(10)->create();
        Review::factory(20)->create();
        BookClub::factory(5)->create();
        Creation::factory(10)->create();
        Comment::factory(20)->create();
        Tag::factory(10)->create();
    }
}

