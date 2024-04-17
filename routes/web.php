<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/hello', [IndexController::class, 'show'])->name('show');

// Route::resource('listing', ListingController::class)->only('index', 'show', 'create', 'store');
// Route::resource('listing', ListingController::class)->except(['destroy']);
Route::resource('listing', ListingController::class);
