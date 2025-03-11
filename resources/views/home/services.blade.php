<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="{{ asset('assets/css/stylesmaster_services.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylesheader_s.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesintro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesservices.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_our_equipment.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_how_it_works.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylesfooter_s.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_clients.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_team.css') }}">


</head>
<body>
    @include('layouts.partials_s.header_s')
    @include('layouts.partials_s.intro')
    @include('layouts.partials_s.services')
    @include('layouts.partials_s.our_equipment')
    @include('layouts.partials_s.how_it_works')
    @include('layouts.partials_s.clients')
    @include('layouts.partials_s.team')
    @include('layouts.partials_s.footer_s')



<main class="container">
    @yield('content')
</main>

</body>
</html>