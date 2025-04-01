<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offerts</title>

    <!--<link rel="stylesheet" href="{{ asset('assets/css/styles_offers.css') }}">-->
     

    <!-- Carousel section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
     
</head>

<header class="header-custom-s">

    <div class="navbar_search">
        <svg class="icon-search" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11" cy="11" r="8" stroke="black" stroke-width="2"/>
            <line x1="16" y1="16" x2="22" y2="22" stroke="black" stroke-width="2"/>
        </svg>
        <input type="text" class="search-input" placeholder="Buscar...">
    </div>


    <div class="user_menu">

        <img src="assets/image/icono_usuario.png" alt="Client Photo">
        
        <!-- Formulario de logout -->
        <form action="/logout" method="POST" style="display:inline;">

            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
                    
    <div class="separator"></div>
</header>

<body>

<div class="informacion-A">
    <h2>Offerts</h2>
    <p class="subtitulo">Big Discounts on Mining Equipment: Power and Savings in One Place</p>
    <p class="describcion">Discover state-of-the-art machinery with special prices for a limited time.</p>

</div>

<div class="Carousel-section-o">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                <img src="assets/image/coment.png" alt="Comentarios">
                <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>
    </div>
</div>

<div class="informacion-B">
     
    <p class="subtitulo">Limited Stock, Unlimited Discounts: Don't Miss This Opportunity</p>
    <p class="describcion">Take advantage of our exclusive promotions before they sell out.</p>

</div>

<div class="Carousel-section-o">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                <img src="assets/image/coment.png" alt="Comentarios">
                <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>
    </div>
</div>

<div class="informacion-C">
     
    <p class="subtitulo">Quality, Innovation and Price in one place, discover the best promotions!</p>
    <p class="describcion">High performance equipment with the best investment for your project.</p>

</div>

<div class="Carousel-section-o">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                <img src="assets/image/coment.png" alt="Comentarios">
                <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>

        <div class="swiper-slide">
            <div class="offer-icon">
                <img src="assets/image/fir.jpg" alt="Oferta">
            </div>
            <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
            <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
            <p class="id">id: 12345689</p>
            <div class="rating">
                <span class="stars">★★★★★</span>
                <div class="rating-row">
                    <img src="assets/image/coment.png" alt="Comentarios">
                    <a href="#comments-section" class="reviews">(97)</a>
                </div>
            </div>
            <div class="price-container">
                <p class="old-price">$250,000</p>
                <p class="discount">-6%</p>
            </div>
            <p class="new-price">$235,000</p>
            <button class="cart-button" onclick="location.href='{{ route('dashboard') }}'">
                <img src="assets/image/carrito.png" alt="Carrito">
            </button>
        </div>
    </div>
</div>

     



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ asset('assets/js/carousel_offers.js') }}"></script>

    
</body>
</html>