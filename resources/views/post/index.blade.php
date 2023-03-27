@extends('layout.layout')
@section('title')
    Posts
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
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create</a>
        </div>
        @foreach($posts as $post)
            <div><a href="{{ route('posts.show', $post->id) }}">{{ $post->id }}.{{ $post->title }}</a></div>
        @endforeach
    </div>
@endsection
