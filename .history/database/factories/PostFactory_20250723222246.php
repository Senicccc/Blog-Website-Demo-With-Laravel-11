<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // ✅ huruf S besar

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'author' => fake()->name(),
            'slug' => Str::slug($title),
            'body' => fake()->paragraphs(3, true),
        ];
    }
}