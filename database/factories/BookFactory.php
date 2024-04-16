<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $digital = fake()->boolean(25);

        return [
            'title' => fake()->sentence(),
            'summary' => fake()->paragraph(),
            'isbn' => fake()->isbn13(),
            'digital' => $digital,
            'stock' => $digital ? 0 : fake()->randomDigit(),
            'published_year' => fake()->year(),
            'price' => fake()->numberBetween(10_000, 900_000)
        ];
    }
}
