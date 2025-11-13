@extends('layouts.master')
@section('title', 'Home Page')


@section('content')
<div class="container-fluid p-0 m-0" style="max-width: 100%; overflow: hidden;">
    <img src="{{ asset('image/group-study.jpg') }}" alt="Banner" class="w-100 d-block" style="max-height: 400px; object-fit: cover; margin: 0; padding: 0;">
</div>
</div>
<div class="container">
  @foreach($courses as $course)
  <div class="card mb-4 shadow-sm border-0 ">
    <div class="row g-0 align-items-center">
      <!-- Gambar Artikel -->
      <div class="col-md-4 pt-4">
        <img src="{{ asset('image/machine-learning.jpg') }}" class="img-fluid rounded-floated-start card-img align-items-center" alt="{{ $course->title }}">
      </div>

      <!-- Konten Artikel -->
      <div class="col-md-8">
        <div class="card">
             <div class="card-body">
             <h5 class="card-title fw-bold">{{ $course->title }}</h5>
            <small class="text-muted">
            {{ $course->published_at->format('d M Y') }} | by {{ $course->writer->name }}
             </small>
            <p class="card-text mt-2">{{ Str::limit($course->content, 150) }}</p>

             <a href="{{ route('category.show', $course->category_id) }}" class="btn btn-dark rounded-pill px-4">
            read more...
            </a>
            </div>
        </div>

      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
