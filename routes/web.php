<?php

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

Route::get('/', function () {
    return view('about', [
        "name" => "Ainan Bahrul Ihsan",
        "email" => "ainanihj@gmail.com",
        "image" => "ainan.jpg"
    ]);
});

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('post');
// });

// Route::get('/', function () {
//     return 'Hello WPU';
// });