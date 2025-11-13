@extends('layouts.master')
@section('title', 'Detail Page')


@section('content')

    <div class="container">
        <article>
            <h2>{{ $course->title }}</h2>
        </article>
    </div>

@endsection
