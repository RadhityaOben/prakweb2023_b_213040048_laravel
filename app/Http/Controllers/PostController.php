<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{

    public function index()
    {
        $title = "";
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = "Post by Category : $category->name";
        } else if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = "Post by Author : $author->name";
        } else {
            $title = "All Posts";
        }

        return view('posts', [
            "title" => $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
