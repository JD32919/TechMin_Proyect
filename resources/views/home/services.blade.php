<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <link rel="stylesheet" href="{{ asset('assets/css/stylesmaster.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/stylesheader_s.css') }}">


</head>
<body>
    @include('layouts.partials_s.header_s')
    @include('layouts.partials_s.intro')



<main class="container">
    @yield('content')
</main>

</body>
</html>