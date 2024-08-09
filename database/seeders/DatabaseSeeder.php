<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();

        User::factory(10)->create()->each(function($user) use ($categories) {
            Post::factory(rand(1,3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id
            ]);
        });
    }
}
