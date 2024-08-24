<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    $posts = Post::all();

    return view('dashboard',['posts' => $posts]);
})->middleware(['auth', 'verified'])->name('dashboard');
/*
Route::get('/dashboard', function(){
    $posts = Post::all();
    return view('blog', ['posts' => $posts]);
});*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/create-post', [PostController::class, 'createPost']);
    Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
    Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
    Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
});


require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';