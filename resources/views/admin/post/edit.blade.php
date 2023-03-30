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
            <ul>
                @foreach($errors->all() as $message)
                    <li class="text-danger">
                        {{ $message }}
                    </li>
                @endforeach
            </ul>
            <div class="form-group mb-4">
                <label for="title" class="mb-2">Заголовок</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок"
                       value="{{ $post->title }}">
            </div>
            <div class="form-group mb-4">
                <label for="title" class="mb-2">Короткий опис</label>
                <input type="text" name="short_content" class="form-control" id="short_content" placeholder="Короткий опис"
                       value="{{ $post->short_content }}">
            </div>
            <div class="form-group mb-4">
                <label for="content" class="mb-2">Контент</label>
                <textarea id="summernote" name="content" placeholder="Контент">{{ $post->content }}</textarea>
            </div>
            <div class="w-25">
                <img src="{{ url('storage/' . $post->image) }}" class="w-50">
            </div>
            <div class="form-group w-50">
                <label for="image">Змініть зображення</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="image">Виберіть файл</label>
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
