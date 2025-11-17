<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
      public function show($id)
    {
        $courses = Course::with('writer')
        ->findOrFail($id);

        $writer = $courses->writer;

        return view('detail', compact('courses', 'writer'));
    }
}
