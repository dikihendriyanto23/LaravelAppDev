@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-5">Blog Post</h1>
        </div>
        <div class="col-md-3">
            <a href="/categories" class="btn btn-success float-end">List Categories</a>
        </div>
    </div>
    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-4">
            <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By Muhammad Diki Hendriyanto in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection


