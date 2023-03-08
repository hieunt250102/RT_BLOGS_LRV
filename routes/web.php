<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
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
    Route::get('/sign-in', [LoginController::class, 'loginForm'])->name('sign-in');
    Route::post('/sign-in', [LoginController::class, 'login'])->name('sign-in');
    Route::get('/sign-up', [RegisterController::class, 'registerForm'])->name('sign-up');
    Route::post('/sign-up', [RegisterController::class, 'register'])->name('sign-up');
    Route::get('email/verify', [VerificationController::class, 'show'])->name('email.verify');
    Route::get('/verify', [VerificationController::class, 'verify'])->name('verify');
    Route::post('/resend/verify', [VerificationController::class, 'resendVerify'])->name('resend.verify');

    Route::get('/forgot-password', function () {
        return view('client.forgot-password');
    })->name('forgot');
    Route::get('/reset-password', function () {
        return view('client.reset-password');
    })->name('reset');
})->middleware(['verify.register']);

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
