@extends('layouts.main')

@section('contents')
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-3 py-3">
                        <h1 class="text-center fw-bold mb-4">REGISTRATION FORM</h1>
                        <form action="/register" method="post">
                            @csrf
                            <label for="name" class="labels d-block text-center fs-5">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" autofocus required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror <br>
                            <label for="username" class="labels d-block text-center fs-5">Username</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror <br>
                            <label for="email" class="labels d-block text-center fs-5">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror <br>
                            <label for="password" class="labels d-block text-center fs-5">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror <br>
                            <button type="submit" class="loginbtn btn btn-dark">Register</button>
                        </form>
                        <small class="d-block text-center mt-3">All Registered? <a class="texts" href="/login">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>		
@endsection