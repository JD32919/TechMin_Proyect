@extends('layouts.auth-master')

@section('content')
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <h1>Reset Password</h1>
        @include('layouts.partials.messages')

        <!-- Token oculto (Laravel lo envía en el enlace de restablecimiento) -->
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>
@endsection
