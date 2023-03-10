<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Client\BlogController as ClientBlogController;
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

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::get('/sign-in', [LoginController::class, 'loginForm'])->name('sign-in');
    Route::post('/sign-in', [LoginController::class, 'login'])->name('sign-in');
    Route::get('/sign-up', [RegisterController::class, 'registerForm'])->name('sign-up');
    Route::post('/sign-up', [RegisterController::class, 'register'])->name('sign-up');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('email/verify', [VerificationController::class, 'show'])->name('email.verify');
        Route::get('/verify', [VerificationController::class, 'verify'])->name('verify');
        Route::post('/resend/verify', [VerificationController::class, 'resendVerify'])->name('resend.verify');
    });

    Route::get('/forgot-password', function () {
        return view('client.forgot-password');
    })->name('forgot');
    Route::get('/reset-password', function () {
        return view('client.reset-password');
    })->name('reset');
});

Route::resource('blogs', ClientBlogController::class);
Route::resource('blogs', ClientBlogController::class)->only('create')->middleware('auth');
Route::get('/blogs/{slug}', [ClientBlogController::class, 'show'])->name('blogs.show');
Route::get('my-blogs', [ClientBlogController::class, 'myBlogs'])->name('blogs.me');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('index');
    Route::resource('blogs', BlogController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
});
