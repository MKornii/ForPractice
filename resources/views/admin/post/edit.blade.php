@extends('admin.layout.layout')
@section('title')
    Редагувати
@endsection

@section('page_title')
    Редагуйте новину
@endsection
@section('content')
    <div class="container-fluid">
        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group mb-4">
                <label for="title" class="mb-2">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок"
                       value="{{ $post->title }}">
            </div>
            @error('title')
            <div class="text-danger">Необхідно заповнити</div>
            @enderror
            <div class="form-group mb-4">
                <label for="title" class="mb-2">Короткий опис</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Короткий опис"
                       value="{{ $post->short_content }}">
            </div>
            <div class="form-group mb-4">
                <label for="content" class="mb-2">Контент</label>
                <textarea id="summernote" name="content" placeholder="Контент" value="{{ $post->content }}"></textarea>
            </div>
            <div class="w-15">
                <img src="{{ asset('storage/'.$post->image) }}">

            </div>
            <div class="form-group w-50">
                <label for="exampleInputFile">Змініть зображення</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile" value="{{ $post->image }}">Виберіть файл</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Завантажити</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection