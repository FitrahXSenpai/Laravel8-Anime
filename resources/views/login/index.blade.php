@extends('layouts.main')

@section('contents')
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="px-3 py-3">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif
            </div>
        </div>
    </div>
    <div class="row mt-1 mb-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-3 py-3">
                        <h1 class="text-center fw-bold mb-4">PLEASE LOGIN</h1>
                        <form action="/login" method="post">
                            @csrf
                            <label for="email" class="labels d-block text-center fs-5">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror <br>
                            <label for="password" class="labels d-block text-center fs-5">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required><br>
                            <button type="submit" class="loginbtn btn btn-dark">Login</button>
                        </form>
                        <small class="d-block text-center mt-3">Not Registered? <a class="texts" href="/register">Register Now!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>		
@endsection