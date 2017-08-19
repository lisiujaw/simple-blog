@extends('layouts.bootstrap')
@section('content')
@include('partials.title')
    <div class="col-sm-12 blog-main">
        @foreach($posts as $post)
            @include('partials.post')
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12 blog-main">
            {!! $posts->render('partials.pagination') !!}
        </div>
    </div>
@endsection