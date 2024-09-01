<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Membuat 3 user dan menyimpannya ke dalam variabel $users
        $users = User::factory(3)->create();

        Category::create([
        'name' => 'Programming'
        ]);

        Category::create([
        'name' => 'Personal'
        ]);

        Category::create([
        'name' => 'Gaming'
        ]);

        // Membuat 3 post dan mengaitkannya ke user secara acak
        Post::factory(20)->create();
    }
}
