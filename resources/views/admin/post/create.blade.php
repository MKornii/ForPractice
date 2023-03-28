@extends('admin.layout.layout')
@section('title')
    Створити
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-4 align-center">Створіть новину</h1>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="title" class="form-control w-25" id="title" placeholder="Заголовок">
            </div>

            <div class="form-group mb-4 ">
                <input type="text" class="form-control w-25" name="short_content" id="image" placeholder="Короткий опис">
            </div>
            <div class="form-group mb-4">
                <label for="content" class="mb-2 h3">Контент</label>
                <textarea id="summernote" name="content" placeholder="Контент"></textarea>
            </div>
            <div class="form-group w-50">
                <label for="exampleInputFile">Добавте зображення</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Виберіть файл</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Завантажити</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Створити</button>
        </form>
    </div>
@endsection
