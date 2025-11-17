@extends('layouts.master')
@section('title', 'Home Page')


@section('content')
    <div class="container-fluid p-0 m-0" style="max-width: 100%; overflow: hidden;">
    <img src="{{ asset('image/group-study.jpg') }}" alt="Banner" class="w-100 d-block" style="max-height: 400px; object-fit: cover; margin: 0; padding: 0;">
    </div>


<div class="container">
    <div class="row">
        @foreach ($courses as $course)
        <div class="col-12 pt-5">
            <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
                 <div class="col-md-4 pt-4">
                 <img src="{{ asset('image/'.$course->courseImage) }}" class="img-fluid rounded-floated-start card-img align-items-center" alt="{{ $course->title }}">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-2">{{ $course->title }}</h5>
                    <p class="card-text"><small class="text-muted">{{$course->published_at->diffForHumans() }} | {{ $course->writer->name }}</small></p>
                    <p class="card-text fs-4 text-truncate-3">{{ $course->content }}</p>

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-dark w-25 rounded-pill" href="{{ route('course.detail', $course->id) }}">
                            Read More
                        </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
