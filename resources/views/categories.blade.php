@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Post Categories</h1>

    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="https://picsum.photos/seed/game/500/500" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title flex-fill p-4 text-center fs-3" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/blog?category={{ $category->slug }}" class="text-white text-decoration-none">{{ $category->name }}</a></h5>
                </div>
            </div>   
        </div>
        @endforeach
    </div>
    
@endsection