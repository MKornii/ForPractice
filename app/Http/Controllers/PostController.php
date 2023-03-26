<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts');
    }
    public function create(){
        $postArr = [
            [
                'title' => 'Title ',
                'content' => 'Some content',
                'image' => 'image.jpg',
                'is_publised' => 1,
            ],
            [
                'title' => 'Title another',
                'content' => 'Some another content',
                'image' => 'anotherimage.jpg',
                'is_publised' => 1,
            ],
        ];
        foreach ($postArr as $item) {

            Post::create($item);
        }
        dd('created');
    }
    public function update(){
        $post = Post::find(4);
        $post->update([
            'title' => 'Title updated',
            'content' => 'Some updated content',
            'image' => 'updatedimage.jpg',
            'is_publised' => 1,
        ]);
    }
    public function delete(){

        $post = Post::find(2);
        $post->delete();
    }
}
