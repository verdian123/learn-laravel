<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Muhammad Verdiansyah",
        "email" => "verdiansyah1404@gmail.com",
        "image" => "phone.png"
    ]);
});

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        "title" => "posts",
    ]);
});
