<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FeaturesController;
use App\Http\Controllers\Frontend\PropertiesController;
use App\Http\Controllers\Frontend\ServiceController;

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

Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']) -> name('blog');
Route::get('/insert-existing-blog-posts', [BlogController::class, 'insertExistingBlogPosts']) -> name('insert-existing-blog-posts');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::get('/features', [FeaturesController::class, 'index']);
Route::get('/properties', [PropertiesController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']) -> name('services');



