<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LinkController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/links/{id}', [LinkController::class, 'show'])->name('links.show');

Route::put('/links/{id}', [LinkController::class, 'update'])->name('links.update');

Route::delete('/links/{id}', [LinkController::class, 'destroy'])->name('links.destroy');
Route::get('/links/search', [LinkController::class, 'search'])->name('links.search');






Route::middleware('guest')->group(function () {
    // Route to show the login form
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    // Route to handle the login form submission
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    
    // Route to show the registration form
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route to handle the registration form submission
    Route::post('register', [RegisterController::class, 'register'])->name('register.store');
});

// Route to handle user logout, accessible only to authenticated users
Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');






Route::get('/about', function () {
    return view('posts.about');
})->name('about');