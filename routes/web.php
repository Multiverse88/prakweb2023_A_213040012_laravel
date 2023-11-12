<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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

// Jika ada rute yang metode requestnya get yang alamatnya adalah '/' 
Route::get('/', function () {
    // return view('welcome'); // tampilkan sebuah view bernama "welcome"
    return view('home', [
        'title' => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'active' => 'about',
        'name' => "Ainan Bahrul Ihsan",
        'email' => "ainanihj@gmail.com",
        'image' => "ainan.jpg"
    ]);
});




Route::get('/posts', [PostController::class, 'index']);

// Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title'=> 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category: $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
    ]);
});



Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author: $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});