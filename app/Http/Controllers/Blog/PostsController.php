<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Category;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('blog.show')->with('post', $post);
    }
}
