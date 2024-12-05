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
    return view('content.home');
})->name('home');

Route::get('/about', function () {
    return view('content.about');
})->name('about');

Route::get('/contact', function () {
    return view('content.contact');
})->name('contact');

Route::get('/blog-detail', function () {
    return view('content.blog-detail');
})->name('blog-detail');