<?php
namespace App\Http\Controllers;
use App\Models\Writer;

class WriterController extends Controller {
    public function index() {
        $writers = Writer::all();
        return view('writer', compact('writers'));
    }

    public function show($id) {
        $writer = Writer::with('courses')->findOrFail($id);
        return view('writer-detail', compact('writer'));
    }
}
