<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticController;

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

Route::get('/', [StaticController::class, 'index'])->middleware('auth');
Route::get('/index/{id}', [StaticController::class, 'find'])->middleware('auth');

Route::get('/about', [StaticController::class, 'about'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'create']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('/book/me', [BookController::class, 'my_book'])->middleware('auth');

Route::get('/post', [PostController::class, 'index'])->middleware('auth');
Route::get('/post/{id}', [PostController::class, 'show']);
