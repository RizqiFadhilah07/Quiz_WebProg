<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function showHome()
    {
        $courses = Course::with('writer')
        ->orderBy('published_at', 'desc')
        ->take(2)
        ->get();

        return view('home', compact('courses'));
    }
}
