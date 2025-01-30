<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'welcomePage']); // Display the form
Route::post('/store', [BlogController::class, 'store'])->name('Blog.store'); // Store blog and dispatch event
