
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/posts.index');
});
// Define resource routes for PostController
Route::resource('/posts', PostController::class);