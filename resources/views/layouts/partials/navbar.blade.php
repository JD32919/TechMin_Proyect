<!-- Navbar principal con Bootstrap -->
<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Marca/logo -->
    <a class="navbar-brand" href="#">TECHMINE</a>

    <!-- Botón para menú desplegable en dispositivos pequeños -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenedor del menú -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Enlace: Services -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>
        <!-- Enlace: Our Equipment -->
        <li class="nav-item">
          <a class="nav-link" href="#">OurEquipment</a>
        </li>
        <!-- Menú desplegable: How it Works -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">How it Works</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!-- Enlace: Clients (deshabilitado) -->
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Clients</a>
        </li>
        <!-- Enlace: Team -->
        <li class="nav-item">
          <a class="nav-link" href="#">Team</a>
        </li>
        <!-- Enlace: Contact Us -->
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>

      <!-- Menú de usuario -->
      <ul class="navbar-nav me-5 mb-2 mb-lg-0">
        <!-- Si el usuario no ha iniciado sesión -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="/login">Log In</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-warning" href="/register">Sign In</a>
        </li>
        @endguest

        <!-- Si el usuario ha iniciado sesión -->
        @auth
          <li class="nav-item dropdown">

            <!-- Mostrar la imagen del usuario -->
            <img src="{{ auth()->user()->profile_photo_url }}" alt="Client Photo" class="rounded-circle" style="width: 40px; height: 40px;">
      
            <!-- Formulario de logout -->
            <form action="/logout" method="POST" style="display:inline;">

              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

  
