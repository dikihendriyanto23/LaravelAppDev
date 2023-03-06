@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h1 class="mb-5">{{ $title }}</h1>
        </div>
        <div class="col-md-3">
            <a href="/categories" class="btn btn-success float-end">List Categories</a>
        </div>
    </div>

    <div class="card mb-3">
        <img src="https://picsum.photos/seed/sport/1200/400" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
            <p>
                <small class="text-muted">
                    By <a href="/authors/{{ $posts[0]->author->id }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-category position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://picsum.photos/seed/sport/500/400" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                By <a href="/authors/{{ $post->author->id }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


