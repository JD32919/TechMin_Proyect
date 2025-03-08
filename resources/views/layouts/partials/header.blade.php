<!-- Header -->
<header class="header-custom">
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
            <div class="user-menu dropdown">
                <a href="#" class="dropdown-toggle">
                    {{auth()->user()->name ?? auth()->user()->username}}
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><hr></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
        @endauth
    </div>
</header>

