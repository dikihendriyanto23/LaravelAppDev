@extends('layouts.main')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>    
        @endif

        @if (session()->has('loginEror'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginEror') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>    
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" name="passwords" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not register? <a href="/register"><strong>Register Now!</strong></a></small>
            <p class="mt-4 mb-3 text-body-secondary">&copy; 2023</p>
          </main>
    </div>
</div>
    
@endsection