<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Writer;

class WriterController extends Controller {
    public function index() {
        $writers = Writer::all();
        return view('writer', compact('writers'));
    }

    public function showByWriter($id){
        $writer = Writer::findOrFail($id);

        $courses = Course::where('writer_id', $id)
        ->with('writer')
        ->get();

        return view('writer_detail', compact('courses', 'writer'));
    }
}
