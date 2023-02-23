@extends('layouts.main')

@section('content')

    <article class="mb-5">
        <h2>{{ $post['title'] }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="btn btn-primary">Back to Blog</a>

@endsection

