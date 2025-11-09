<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller {
    public function index() {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id) {
        $courses = Course::where('category_id', $id)->get();
        return view('detail', compact('courses'));
    }
}
