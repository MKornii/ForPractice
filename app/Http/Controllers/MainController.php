<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $posts = Post::paginate(6);
        return view('main', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
