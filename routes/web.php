<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/main/{main}', [MainController::class, 'show'])->name('show.index');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']], function (){
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('logout', [AdminController::class, 'logout']);

        Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
        Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

        Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
        Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
        Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.delete');


        Route::get('/posts/update', [PostController::class, 'update']);
        Route::get('/posts/delete', [PostController::class, 'delete']);
    });
    });

Auth::routes();

