@extends('admin.layout.layout')
@section('title')
    Новини
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid col-12">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Назва</th>
                    <th>Короткий опис</th>
                    {{--  <th>Дата створення</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                  <tr>
                      <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->id }}</a></td>
                      <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                      <td class="col-"><a href="{{ route('posts.show', $post->id) }}" >{{ $post->short_content }}</a></td>
                     {{-- <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->timestams }}</a></td>--}}
                  </tr>
                @endforeach

                </tbody>
            </table>
             <!-- /.info-box -->
            </div>
            <!-- /.col -->

</section>
@endsection
