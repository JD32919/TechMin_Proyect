@extends('layouts.auth-master')

@section('content')
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <h1>Forgot your password?</h1>
        @include('layouts.partials.messages')

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll send a password reset link to your email address.</div>
        </div>

        <div class="mb-3">
            <a href="/login">Back to Login</a>
        </div>

        <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
    </form>
@endsection
