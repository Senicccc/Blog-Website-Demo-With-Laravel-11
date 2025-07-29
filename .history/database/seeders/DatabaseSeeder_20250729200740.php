<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'John Doe',
        //     'username' => 'johndoe',
        //     'email' => 'johndoe@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10), // Optional, if you want to set a remember token
        // ]);

        // Category::create([
        //     'name' => 'Technology',
        //     'slug' => 'technology',
        // ]);

        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'body' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        //     'author_id' => 1, // Assuming the user ID is 1
        //     'category_id' => 1, // Assuming the category ID is 1
        // ]);

        Post:factory(100)->recycle([
            Category::factory(3)->create(),
            User::factory(5)->create
        ])
    }
    
}