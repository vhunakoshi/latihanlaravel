<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\DashboardCategoryController;


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

// Routing untuk Materi Laravel 8
Route::get('/', function () { return view('index', ["title" => "Home", 'active' => 'home', "name" => "Bambang Pemangkas", "email" => "bambang@gmail.com"]); });
Route::get('/about', function () { return view('about', ["title" => "About", 'active' => 'about', "name" => "Bambang Pemangkas", "email" => "bambang@gmail.com"]); });
Route::get('/blog', [PostController::class, "index"]);
Route::get('/post/{post:slug}', [PostController::class, "show"]);
Route::get('/categories', [PostController::class, 'category']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show');

// except = pengecualian
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => 'Post By Category : '.$category->name,
//         'post' => $category->posts->load('category', 'author'),
//         'active' => 'categories'
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => 'Post By Author : '.$author->name,
//         'post' => $author->posts->load('categoory', 'author'),
//         'active' => 'categories'
//     ]);
// });