<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('assets/css/stylesmaster.css') }}">
    <!-- Navbar barra principal -->
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheader.css') }}">
    <!-- Hero section -->
    <link rel="stylesheet" href="{{ asset('assets/css/styleshero.css') }}">
    <!-- Carousel section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/stylescarousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylesproduct.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylesbrands.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylestestimonial.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylesfooter.css') }}">


</head>
<body>
    @include('layouts.partials.header')
    @include('layouts.partials.hero')
    @include('layouts.partials.carousel')
    @include('layouts.partials.product')
    @include('layouts.partials.trustedbrands')
    @include('layouts.partials.testimonial')
    @include('layouts.partials.footer')

<main class="container">
    @yield('content')
</main>

<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>    

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>