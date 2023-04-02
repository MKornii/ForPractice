<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
    public function create()
    {
        return view('admin.post.create');

    }
    public function store()
    {
        $data = request()->validate([
            'title'=>'string|required',
            'short_content'=>'string|required',
            'content'=>'string|required',
            'image'=>'file|required',
            ]);
       $data['image'] = Storage::disk('public')->put('/images', $data['image']);

        Post::firstOrCreate($data);
        return redirect()->route('posts.index');
    }
    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));

    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title'=>'string|required',
            'short_content'=>'string|required',
            'content'=>'string|required',
            'image'=>'file|required',
        ]);
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);

        $post->update($data);

        return redirect()->route('posts.show', $post->id);


    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');


    }
}
