<?php

// use App\Models\Post;

// use App\Http\Controllers\DashboardController;

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ["title" => "Home", "active" => "home"]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "gen Halpha betha",
        "email" => "Halpha@ohh.com",
        "image" => "img1.png"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// Route::get('posts/{slug}', function ($slug) {
//     // $blog_post = Post::all();
//     // $new_post = [];
//     // foreach ($blog_post as $post) {
//     //     if ($post["slug"] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // }
//     //dd($new_post);   
//     return view('post', [
//         "title" => "Single Post",
//         // "post" => $new_post,
//         "post" => Post::find($slug)
//     ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        "title" => "Post by Category : $category->name",
        "active" => "categories",
        "posts" => $category->posts->load(['category', 'author'])
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        "active" => "posts",
        "title" => 'Post by Author : ' . $author->name,
        "posts" => $author->posts->load(['category', 'author']),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
