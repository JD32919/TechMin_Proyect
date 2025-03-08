<!-- Header -->
<header class="header-custom-s">
    <div class="logo">TECHMIN</div>
    <nav>
        <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Our Equipment</a></li>
            <li><a href="#">How It Works</a></li>
            <!--
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">How It Works</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><hr></li>
                    <li><a href="#">Something else here</a></li>
                </ul>
            </li>
            -->
            <li><a href="#">Clients</a></li>
            <li><a href="#">Team</a></li>
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
</header>

