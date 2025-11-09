<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');

Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
