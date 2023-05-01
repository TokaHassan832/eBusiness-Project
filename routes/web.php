<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::prefix('/blog')->group(function (){
    Route::get('/',[PostController::class,'index'])->middleware('auth');
    Route::get('/posts/{post}',[PostController::class,'show'])->middleware('auth');
    Route::post('/posts/{post}/comments',[CommentController::class,'store']);
});

Route::prefix('/admin')->group(function (){
    Route::get('/', [AdminPostController::class,'index']);
    Route::get('/posts/create', [AdminPostController::class,'create']);
    Route::get('/posts/edit', [AdminPostController::class,'edit']);
});

