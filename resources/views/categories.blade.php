@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Post Categories</h1>
    @foreach ($categories as $category)
       <ul>
            <li>
                <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </li>
       </ul>
    @endforeach
@endsection