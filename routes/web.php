<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::get('/sign-in', function () {
        return view('client.sign-in');
    })->name('sign-in');
    Route::get('/sign-up', function () {
        return view('client.sign-up');
    })->name('sign-up');
    Route::get('/forgot-password', function () {
        return view('client.forgot-password');
    })->name('forgot');
    Route::get('/reset-password', function () {
        return view('client.reset-password');
    })->name('reset');
});

Route::prefix('blogs')->group(function () {
    Route::get('/', function () {
        return view('client.index');
    })->name('blogs.index');
    Route::get('/create', function () {
        return view('client.create-blog');
    })->name('blogs.make');
    Route::get('/me', function () {
        return view('client.my-blogs');
    })->name('blogs.me');
    Route::get('/{param}', function () {
        return view('client.blog-detail');
    })->name('blogs.detail');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.index');
    Route::get('/posts', function () {
        return view('admin.posts.index');
    })->name('posts.list');
    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('users.list');
});
