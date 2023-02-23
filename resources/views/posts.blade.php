@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Blog Post</h1>
    @foreach ($posts as $post)
        <article class="mb-4">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection


