@extends('layouts.master')
@section('title', 'Detail Page')


@section('content')

<div class="container border">
    <div class="row">
        <div class="col-12 fw-bold pt-5">
            <h1>{{ $courses->title }}</h1>
        </div>

        <div class="col-12 ">
           <img src="{{ asset('image/'.$courses->courseImage) }}"  class="img-fluid rounded" width="500" height="1000">
        </div>

        <div class="col-12">
            <p class="fs-5 fw-light">Date: {{ $courses->published_at->format('d F Y') }} | By: {{ $courses->writer->name }}</p>
        </div>

        <div class="col-12 pt-5">
            <p class="fs-4">{{ $courses->content}}</p>
        </div>
    </div>
</div>

@endsection
