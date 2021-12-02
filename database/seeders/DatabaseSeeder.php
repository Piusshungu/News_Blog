<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;
use Database\Factories\PostFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //User::truncate();
        //Post::truncate();
        //Category::truncate();

        PostFactory::times(5)->create();


        //$this->call(PostFactory::);
        // \App\Models\User::factory(10)->create();

        // $user = User::factory()->create();

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Category::create([
        //     'name' => 'Business',
        //     'slug' => 'business'
        // ]);

        // Category::create([
        //     'name' => 'Works',
        //     'slug' => 'work'
        // ]);


        // DB::table('users')->insert([
        //     'id' => Str::random(10),
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);

        // DB::table('categories')->insert([
        //     'id' => Str::random(10),
        //     'name' => Str::random(10),
        //     'slug' => Str::random(10),
        // ]);

        // DB::table('posts')->insert([
        //     'id' => Str::random(10),
        //     'category_id' => Str::random(10),
        //     'user_id' => Str::random(10),
        //     'slug' => Str::random(10),
        //     'title' => Str::random(10),
        //     'excerpt' => Str::random(10),
        //     'body' => Str::random(50),

        // ]);

        
    }
}
