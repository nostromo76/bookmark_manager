<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'posts.index');

// Define resource routes for PostController
Route::resource('/posts', PostController::class);

// Named route for About page
Route::get('/about', function () {
    return view('posts.about');
})->name('about'); // Optional: naming the about route

// Named route for Links page
Route::get('/links', function () {
    return view('posts.links');
})->name('posts.links'); // Naming the links route
