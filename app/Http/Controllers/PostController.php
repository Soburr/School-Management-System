<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post() {
        $posts = Post::all();
        return view('dashboard.index')->with('posts', $posts);
    }
}
