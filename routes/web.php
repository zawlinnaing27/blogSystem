<?php

use App\Http\Controllers\AllBlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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

Route::get('/',UserController::class)->name('blogs');
Route::get('blog-detail/{blog}',[BlogDetailController::class,'index'])->name('blog:detail');

Route::post('/blog-detail/comment/{blog}',[CommentController::class,'store'])->name('blog:comment');

Route::get('all-blogs',AllBlogController::class)->name('all:blogs');

Route::get('/register',[AuthController::class,'create'])->middleware('guest')->name('create');
Route::post('/register',[AuthController::class,'store'])->middleware('guest')->name('store');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/login',[AuthController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest')->name('post_login');

Route::post('/subscription/{blog}',[BlogDetailController::class,'subscriptionHandler'])->name('subscriptionHandler');









