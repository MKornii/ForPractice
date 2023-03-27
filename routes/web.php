<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts{post}', [PostController::class, 'show'])->name('posts.show');


Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);

