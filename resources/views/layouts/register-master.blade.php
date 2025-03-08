<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Syiles Sign up -->
    <link rel="stylesheet" href="{{ asset('assets/css/stylesregister.css') }}">

</head>
<body>

<main class="form-container">
    @yield('content')
</main>
    
<!-- Pasar las imágenes al script JS -->
<script id="image-data" type="application/json">@json($images)</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="{{ asset('js/fondo_dinamico.js') }}"></script>

</body>
</html>