@extends('layouts.master')
@section('title', $category->name . ' - EduFun')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">{{ $category->name }}</h2>
    <div class="row">
        @forelse ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($course->content, 100) }}</p>
                        {{-- <p class="card-text"><small class="text-muted">Writer: {{ $course->writer }}</small></p> --}}
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Belum ada course untuk kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection
