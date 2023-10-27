<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Radhitya Putra Ridwan",
        "email" => "raditya.213040048@mail.unpas.ac.id",
        "image" => "radit.jpg",
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
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

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
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

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
