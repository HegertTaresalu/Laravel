<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();
        $personal = Category::create([
                "name" => "Personal",
                "slug" => "personal"


        ]);
        $work = Category::create([
            "name" => "work",
            "slug" => "work"


    ]);
    $hobbies = Category::create([
        "name" => "hobbies",
        "slug" => "hobbies"


    ]);

    //lõpeta seedimine ära
    Post::factory(5)->create([
        "user_id"=> $user->id,
        "category_id" => $personal->id,
        "title" => "My family stuff",
        "slug" => "my_family_stuff",




    ]);
    Post::factory(5)->create([

    ]);

    Post::factory(5)->create([

    ]);



    }
}
