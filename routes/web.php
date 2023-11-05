<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Ainan Bahrul Ihsan",
        'email' => "ainanihj@gmail.com",
        'image' => "ainan.jpg"
    ]);
});




Route::get('/posts', [PostController::class, 'index']);

// Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
