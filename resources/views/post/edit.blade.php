@extends('layout.layout')
@section('title')
    Edit
@endsection
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('main.index') }}">Main</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
          @csrf
          @method('patch')
            <div class="form-group mb-4">
                <label for="title" class="mb-2">Title</label>
                <input type="text"  name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="form-group mb-4">
                <label for="content" class="mb-2">Content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Content" >{{ $post->content }}</textarea>
            </div>
            <div class="form-group mb-4">
                <label for="image" class="mb-2">Image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
