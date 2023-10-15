<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $user = User::factory()->create([
            'name' => 'john',
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id,
        ]);


        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'title' => 'My First Post',
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsum?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aperiam veniam hic iste numquam repellendus iure, similique delectus dolorem maxime. Labore vitae natus cupiditate explicabo ad possimus similique ratione incidunt.</p>',
        // ]);

        // Post::create([
        //     'title' => 'My Second Post',
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsum?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aperiam veniam hic iste numquam repellendus iure, similique delectus dolorem maxime. Labore vitae natus cupiditate explicabo ad possimus similique ratione incidunt.</p>',
        // ]);

        // Post::create([
        //     'title' => 'My Third Post',
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsum?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aperiam veniam hic iste numquam repellendus iure, similique delectus dolorem maxime. Labore vitae natus cupiditate explicabo ad possimus similique ratione incidunt.</p>',
        // ]);

        // Post::create([
        //     'title' => 'My Forth Post',
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'slug' => 'my-forth-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsum?',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi aperiam veniam hic iste numquam repellendus iure, similique delectus dolorem maxime. Labore vitae natus cupiditate explicabo ad possimus similique ratione incidunt.</p>',
        // ]);
    }
}
