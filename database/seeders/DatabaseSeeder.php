<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(5)->create();
        User::factory()->create([
            'name' => 'Tester',
            'email' => 'test@example.com',
            'password' => '12345678'
        ]);

        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        Post::factory(100)->create();
    }
}
