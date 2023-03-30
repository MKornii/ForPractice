@extends('admin.layout.layout')
@section('title')
    Новина
@endsection

@section('content')
    <section class="container">
        <div class="container-fluid">
            <div class="post-content">
                <div class="post-header">
                    <h1 class="mb-5">{{ $post->title }}</h1>
                    <div class="post">
                        <div class="post-image mb-5">
                            <img src="{{ asset('storage/'.$post->image) }}">
                        </div>
                    </div>

                </div>
                <div class="post-content">
                    <p>{{ $post->content }}
                    </p>
                </div>
                </div>

        <div class="row">
            <div class="mr-2">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <div class="mr-2">
            <form action="{{ route('posts.delete', $post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>

            </div>
             <div>
                  <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
             </div>
        </div>
        </div>
    </section>
@endsection
