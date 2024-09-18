<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

Route::view('/', 'posts.index');

// Define resource routes for PostController
Route::resource('/posts', PostController::class);

route::get('/about', function () {    return view('posts.about');

});