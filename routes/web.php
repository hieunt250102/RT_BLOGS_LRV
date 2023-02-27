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

Route::prefix('/')->group(function () {
});

Route::prefix('admin')->group(function () {
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
