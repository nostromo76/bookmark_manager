<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LinkController;

Route::view('/', 'posts.index');

// Define resource routes for PostController
Route::resource('/posts', PostController::class);

// Named route for About page
Route::get('/about', function () {
    return view('posts.about');
})->name('about'); // Optional: naming the about route

// Named route for Links page
//Route::get('/links', [PostController::class, 'linksIndex'])->name('posts.links'); // Updated to use linksIndex method
//Route::get('/links/create', [PostController::class, 'linksCreate']); // Assuming you'll create this method

// Routes for Links

Route::get('/links', [LinkController::class, 'index'])->name('links.index'); // Updated to use 'links.index'
Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
Route::post('/links', [LinkController::class, 'store'])->name('links.store');
Route::get('/links/{id}/edit', [LinkController::class, 'edit'])->name('links.edit');
Route::put('/links/{id}', [LinkController::class, 'update'])->name('links.update');
Route::delete('/links/{id}', [LinkController::class, 'destroy'])->name('links.destroy');


// Named route for About page
Route::get('/about', function () {
    return view('posts.about');
})->name('about');