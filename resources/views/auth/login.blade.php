@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                    <!-- Links: Register and Forgot Password -->
                    <div class="mt-4 text-center">
                        <p class="mb-2">
                            Don't have an account? 
                            <a href="{{ route('register.form') }}" class="text-primary">Register here</a>
                        </p>
                        <p>
                            <a href="{{ route('password.request') }}" class="text-muted small">Forgot your password?</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection