<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/login', [UserAuthController::class, 'login'])->name('user.login');
Route::get('/user/register', [UserAuthController::class, 'register'])->name('user.register');
Route::post('/user/create', [UserAuthController::class, 'create'])->name('user.create');
Route::post('/user/verify', [UserAuthController::class, 'verify'])->name('user.verify');
Route::get('/user/profile', [UserAuthController::class, 'profile'])->name('user.profile');
Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('user.logout');

Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/insert', [PostController::class, 'create']);
Route::get('/posts/{createdPost}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class, 'destroy']);