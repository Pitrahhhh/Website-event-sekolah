<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostControlller;


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

// Route::get('/', function () {
//     return view ('welcome');
// });


Route::get('/about', function () {
    return view ('about', [
        "name" => "PIT",
        "active" => "about",
        "email" => "PIT882@gmail.com",
        "image" => "pp.jpg",
        "title" => "About"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'Slug']);
Route::get('/delete/{post:slug}', [DashboardPostControlller::class, 'delete'])->name('delete');

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/', function () {
    return view ('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/coba', function () {
    return view ('coba',[
        "title" => "coba",
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
            'title' => "Post By Author : $author->name",
            'active' => 'posts',
            'posts' => $author->posts->load('category', 'author'),
        ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function() {
      return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostControlller::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostControlller::class)->middleware('auth');

Route::resource('/dashboard//categories', AdminCategoryController::class)->except('show')->middleware('admin');