<?php

use App\Http\Controllers\AllBlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\filterController;
use App\Http\Controllers\FilterController as ControllersFilterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\App\Models\Blog;

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

Route::get('blog-detai,{blog}',BlogDetailController::class)->name('blog:detail');

Route::get('all-blogs',AllBlogController::class)->name('all:blogs');

Route::get('filter',filterController::class)->name('filters');



