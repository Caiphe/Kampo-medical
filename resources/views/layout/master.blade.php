<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="Kampo Medical Centre">
    <meta name="description" content="Kampo Medical Centre: Located in South African Kimberly, We give you easy access to a doctor, optometrist or dentist ...">
    <meta name="keywords" content="Kampo Medical center, Kampo Medical center Kimberly, Kampo your companion,
        We are pleased to offer you the chance to have the health you need, We give you easy access to a doctor, optometrist or dentist" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    @vite('resources/css/custom.css')
    @vite('resources/css/animate.css')
    @vite('resources/css/aos.css')
    @vite('resources/css/slick.css')
    @vite('resources/css/slick-theme.css')
    <title>Kampo | Medical</title>
</head>
<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
</body>
</html>