@extends('layout')
@section('content')

<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">{{ $post->title }}</h1>
        <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('storage/'.$post->image) }}">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto aos-init" data-aos="fade-up">
                    <p>{{ $post->content}}</p>
                </div>
            </div>
        </section>

    </div>
</main>
@endsection
