<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Course::latest()->take(3)->get();
        return view('home', compact('articles'));
    }
}
