@extends('layouts.login-master')

@section('content')
     
    <div class="login-container">
        <h1 class="logo">TECHMIN</h1>
        <h2 class="welcome-text">Welcome Back!</h2>

        <form action="/login" method="POST">
        @csrf
        @include('layouts.partials.messages')
        <fieldset> 
                 <div class="input-group">
                        <label>Username</label>
                        <div class="input-icon">
                                <input type="text" name="username" placeholder="Username">
                                <i class="fas fa-user"></i>
                        </div>
                </div>

                <div class="input-group">
                    <div class="alinear">
                         <label>Password</label>
                         <a href="{{ route('password.request') }}">Forgot your password?</a> 
                    </div>
                    <div class="input-icon">
                        <input type="password" name="password" placeholder="Password">
                        <i class="fas fa-eye"></i>
                    </div>
                        
                </div>

                <div class="options">
                        
                        <label> <input type="checkbox" name="remember" >Remember me</label>
                        
                </div>

                <button type="submit" class="btn">Log in</button>    
        </fieldset>
                <p>Or</p>
        <fieldset>
            <div class="social-login">
                <div class="social-icons">
                    <button class="social-btn"><i class="fab fa-facebook-f"></i></button>
                    <button class="social-btn"><i class="fab fa-google"></i></button>
                    <button class="social-btn"><i class="fab fa-apple"></i></button>
                </div>
            </div>
        </fieldset>
        <fieldset>
                <p class="register-text">New to TechMin? <a href="/register">Create an account</a></p>
        </fieldset>
           
        </form>

        <footer class="footer">
            <a href="#">Service</a>
            <a href="#">Support</a>
            <a href="#">Company</a>
            <a href="#">Legal</a>
            <a href="#">Join Us</a>
        </footer>
    </div>
@endsection
     
     
    
 