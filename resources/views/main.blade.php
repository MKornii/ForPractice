@extends('layout')
@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Новини</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <a href="{{ route('show.index', $post->id) }}" class="blog-post-permalink">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/'.$post->image) }}">
                            </div>
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                            {{ $post->created_at }}
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                    <div class=" mx-auto " style="margin-top: -100px;">
                        {{ $posts->links() }}
                    </div>
            </div>
        </section>
    </div>

</main>

@endsection
