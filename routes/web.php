<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.show');

// Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/detail/{id}', [CourseController::class,'show'])->name('course.detail');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');

Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');

Route::get('/about', [AboutController::class, 'index'])->name('about');
