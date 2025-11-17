<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index($id)
{
    $category = Category::findOrFail($id);

    $courses = Course::where('category_id', $id)
        ->with(['writer', 'category'])
        ->get();

    return view('category', compact('courses', 'category'));
}

}

