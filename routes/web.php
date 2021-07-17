<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'index'])->name('registerRoute');

Route::get('/post', function () {
    return view('posts.index');
})->name('postsRoute');
