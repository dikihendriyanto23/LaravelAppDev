@extends('layouts.main')

@section('content')

    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By <a href="/authors/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="btn btn-primary">Back to Blog</a>

@endsection

