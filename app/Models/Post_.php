<?php

namespace App\Models;

class Post
{
    private  static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Oji",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "title" => "Judul Post Kedua dan seterus nya",
            "slug" => "judul-post-kedua",
            "author" => "Rizky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "title" => "Judul Post Ketiga aku dan dia",
            "slug" => "judul-post-ketiga",
            "author" => "Rahmat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        // $new_post = [];
        // foreach ($posts as $pst) {
        //     if ($pst["slug"] === $slug) {
        //         $new_post = $pst;
        //     }
        // }
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
