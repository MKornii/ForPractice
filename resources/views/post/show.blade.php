@extends('layout.layout')
@section('title')
    Post
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

        <div>{{ $post->id }}.{{ $post->title }}</div>
        <div>{{ $post->content }}</div>

    </div>
    <div>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('posts.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger">
        </form>

    </div>
    <div>
        <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Back</a>
    </div>
@endsection
