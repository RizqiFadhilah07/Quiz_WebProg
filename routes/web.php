<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'showHome'])->name('home');

Route::get('/category/{id}', [CategoryController::class, 'index'])->name('category.show');

// Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/detail/{id}', [CourseController::class,'show'])->name('course.detail');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');

Route::get('/writer/{id}', [WriterController::class, 'showByWriter'])->name('writer.detail');

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/popular', [PopularController::class, 'index'])->name('popular');
