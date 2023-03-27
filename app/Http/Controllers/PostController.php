<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    public function create()
    {
        return view('post.create');

    }
    public function store()
    {
        $data = request()->validate([
            'title'=>'string|required',
            'content'=>'string|required',
            'image'=>'string',
            ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }
    public function show()
    {

    }
    public function update(){
        $post = Post::find(7);
        $post->update([
            'title' => 'Title updated',
            'content' => 'Some updated content',
            'image' => 'updatedimage.jpg',
            'is_publised' => 1,
        ]);
    }
    public function delete(){

        $post = Post::find(8);
        $post->delete();
    }
}
