@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By <a href="/blog?author={{ $post->author->id }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://picsum.photos/seed/sport/1200/400" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $post->body !!}
                </article>
                
                <a href="/blog" class="d-block btn btn-primary col-md-2 mt-3">Back to Blog</a>
            </div>
        </div>
    </div>

@endsection

