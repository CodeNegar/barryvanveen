@extends('layouts.full-width-centered')

@section('content')

    <div class="page-header">
        <h1>Laatste update</h1>
    </div>

    <div class="previewContainer">
        @foreach($blogs as $blog)
            @include('blog.partials.preview')
        @endforeach
    </div>

@stop
