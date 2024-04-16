<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DatabaseSeeder::class);

        User::factory()->create([
            'name' => 'Staff',
            'email' => 'staff@simptakan.com',
            'role' => \App\Role::STAFF->value,
        ]);

        $memberCount = 10;
        User::factory($memberCount)->create();

        $publisherCount = 10;
        $publishers = Publisher::factory($publisherCount)->create();

        $authorCount = 25;
        $authors = Author::factory($authorCount)->create();

        $genreCount = 100;
        $genres = Genre::factory($genreCount)->create();

        $bookCount = 100;
        $books = Book::factory($bookCount)->create();

        for ($i=0; $i < $bookCount; $i++) {
            $books[$i]->publisher()->associate(fake()->randomElement($publishers));

            for ($j=0; $j < fake()->numberBetween(1, 3); $j++) {
                $books[$i]->authors()->save(fake()->randomElement($authors));
            }

            for ($j=0; $j < fake()->numberBetween(0, 15); $j++) {
                $books[$i]->genres()->save(fake()->randomElement($genres));
            }

            $books[$i]->save();
        }
    }
}
