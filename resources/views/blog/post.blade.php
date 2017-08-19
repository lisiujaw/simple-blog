@php($content = $post->getContent())

@extends('layouts.bootstrap')
@section('content')
@include('partials.title')
    <div class="col-sm-12 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->getTitle() }}</h2>
            <p class="blog-post-meta">{{ $post->getCreatedAt() }}</p>
            {{ $content->getContent() }}
        </div>
    </div>
    <div class="col-sm-12 blog-main">
        <a href="/" class="btn btn-outline-primary">Go back!</a>
    </div>
@endsection
