@extends('layouts.register-master')

@section('content')
        <!--
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="username">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="password" name="password_confirmation">
            <input type="submit" value="Registrase">
        </form>  -->
    <div class="signup-form">
        <div class="form-container">
            <form action="/register" method="POST">
                @csrf
                <h1>Sign up to TechMin</h1>

                @include('layouts.partials.messages')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>

                <label for="Name">Name*</label>
                <input type="text" id="name" name="name" required>

                <label for="username">Username*</label>
                <input type="text" id="username" name="username" required>
                <span class="error-message">Usernames may only contain alphanumeric characters or digits and cannot begin or end with a hyphen.</span>

                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>
                <span id="password-error" class="error-message" style="display: none;">Password must be 8 characters long.</span>
                
                <label for="confirm_password">Confirm Password*</label>
                <input type="password" id="confirm_password" name="password_confirmation" required>
                <span id="confirm-password-error" class="error-message" style="display: none;">Passwords do not match.</span>

                <div class="mb-3">
                    <a href="/login">Login</a>
                </div>
                <button type="submit">Continue ></button>
                <p class="terms-agreement">
                    By creating an account, you agree to the <strong>Terms of Service</strong>. For more
                    information about TechMin's privacy practices, see the <strong>TechMin Privacy Statement</strong>. We'll occasionally send you account-related emails.
                </p>
            </form>
        </div>
        <div class="image-container">
            <img id="background-img" src="{{ $randomImage }}" alt="Fondo dinámico">
        </div>
    </div>
@endsection
