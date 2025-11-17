<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    //
    public function index(){
        $courses = Course::with('writer')
        ->paginate(3);

        return view('popular', compact('courses'));
    }
}
