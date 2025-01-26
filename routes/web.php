<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', action: [BlogController::class, 'welcomePage']);  // This is the route that will be used to display the form
Route::post('/store', action: [BlogController::class, 'store'])->name('Blog.store');  // This is the route that will be used to process the form submission
