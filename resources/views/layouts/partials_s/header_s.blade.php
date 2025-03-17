<!-- Header -->
<header class="header-custom-s">
    <div class="logo"><a href="{{ route('index') }}">TECHMIN</a></div>
    <nav>
        <ul>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('services') }}">Our Equipment</a></li>
            <li><a href="{{ route('services') }}">How It Works</a></li>
            <!--
            <li class="dropdown">
                <a href="{{ route('services') }}" class="dropdown-toggle">How It Works</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('services') }}">Action</a></li>
                    <li><a href="{{ route('services') }}">Another action</a></li>
                    <li><hr></li>
                    <li><a href="{{ route('services') }}">Something else here</a></li>
                </ul>
            </li>
            -->
            <li><a href="{{ route('services') }}">Clients</a></li>
            <li><a href="{{ route('services') }}">Team</a></li>
            <li><a href="#">Contact Us</a></li>
            
            
        </ul>
    </nav>
    <div class="auth-buttons">
        @guest
            <a href="/login" class="login">Log In</a>
            <a href="/register" class="signup">Sign In</a>
        @endguest

        @auth
            <div class="user_menu">
                <img src="assets/image/icono_usuario.png" alt="Client Photo">
      
                <!-- Formulario de logout -->
                <form action="/logout" method="POST" style="display:inline;">

                    @csrf
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        @endauth
    </div>
    <div class="separator"></div>
</header>

