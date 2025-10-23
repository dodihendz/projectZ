<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "domay",
            "username" => "domay hoyap",
            "email" => "youmain@gmail.com",
            "password" => bcrypt("123456")
        ]);

        // User::create([
        //     "name" => "My second User",
        //     "email" => "youUser2@gmail.com",
        //     "password" => bcrypt("123456")
        // ]);

        User::factory(5)->create();

        Category::create([
            "name" => "web-programming",
            "slug" => "web-01"
        ]);

        Category::create([
            "name" => "web-design",
            "slug" => "desweb-02"
        ]);

        Category::create([
            "name" => "Drawing",
            "slug" => "draw-03"
        ]);

        Post::factory(20)->create();

        // post::create([
        //     "category_id" => 1,
        //     "user_id" => 2,
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama1",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem, quod, quia voluptas quos voluptates quibusdam voluptatem voluptatibus quas voluptatum",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit</p>"
        // ]);

        // post::create([
        //     "title" => "Judul Kedua",
        //     "category_id" => 2,
        //     "user_id" => 1,
        //     "slug" => "judul-kedua2",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam",
        //     "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, nostrum iusto? Cupiditate ipsa ducimus reprehenderit sunt itaque, quod maxime fugit quidem quasi beatae optio exercitationem rerum, ex aliquam cumque velit<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, eligendi, iste provident minus deserunt maxime omnis numquam non autem officiis similique repudiandae! Sint velit veniam vero illo, nobis repudiandae magni.</p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque blanditiis ducimus, dolorum, nesciunt quod soluta adipisci nobis ut quia optio error laboriosam rem eum sed quidem aspernatur dolores consequuntur dicta</p>"
        // ]);
    }
}
