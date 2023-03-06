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
    });
    Route::get('/sign-up', function () {
        return view('client.sign-up');
    });
    Route::get('/forgot-password', function () {
        return view('client.forgot-password');
    });
    Route::get('/reset-password', function () {
        return view('client.reset-password');
    });
});

Route::prefix('blogs')->group(function () {
    Route::get('/', function () {
        return view('client.index');
    });
    Route::get('/create', function () {
        return view('client.create-blog');
    });
    Route::get('/me', function () {
        return view('client.my-blogs');
    });
    Route::get('/{id}', function () {
        return view('client.blog-detail');
    });
});

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/posts', function () {
        return view('admin.posts.index');
    });
    Route::get('/users', function () {
        return view('admin.users.index');
    });
});
