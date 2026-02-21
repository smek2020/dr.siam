<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Home dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin panel routes (protected)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // Future admin routes
    // Route::get('/scholars', [AdminController::class, 'scholars'])->name('admin.scholars');
    // Route::get('/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
    // Route::get('/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
});