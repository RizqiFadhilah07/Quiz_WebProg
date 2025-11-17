@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $writer->Name }}</h1>
        </div>
    </div>
    <div class="row">

        @foreach ($courses as $course)
        <div class="col-12 pt-5">
            <div class="card mb-3" style="max-width: auto;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('image/'.$course->courseImage) }}" class="img-fluid rounded" width="500" height="1000">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title fs-2">{{ $course->title }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $course->published_at }} | {{ $course->writer->name }}</small></p>
                    <p class="card-text fs-4 text-truncate-3">{{ $course->content }}</p>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-dark w-25 rounded-pill" >
                            Read More
                        </button>
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
