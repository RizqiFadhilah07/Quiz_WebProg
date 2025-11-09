@extends('layouts.master')

@section('content')
<div class="container">
  @foreach($articles as $a)
  <div class="card mb-4 shadow-sm border-0">
    <div class="row g-0 align-items-center">
      <!-- Gambar Artikel -->
      <div class="col-md-4">
        <img src="{{ asset('image/group-study.jpg') }}" class="img-fluid rounded-start" alt="{{ $a->title }}">
      </div>

      <!-- Konten Artikel -->
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title fw-bold">{{ $a->title }}</h5>
          <small class="text-muted">
            {{ $a->published_at->format('d M Y') }} | by {{ $a->writer->name }}
          </small>
          <p class="card-text mt-2">{{ Str::limit($a->content, 150) }}</p>

          <a href="{{ route('category.show', $a->category_id) }}" class="btn btn-dark rounded-pill px-4">
            read more...
          </a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
