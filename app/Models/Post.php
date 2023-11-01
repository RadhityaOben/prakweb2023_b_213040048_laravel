<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Gak tau apa",
            "slug" => "gak-tau-apa",
            "author" => "Radhitya Putra Ridwan",
            "body" => "Lorem ipsum dolor sit amet"
        ],
        [
            "title" => "Yang ini tau",
            "slug" => "yang-ini-tau",
            "author" => "Radhitya Oben",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
