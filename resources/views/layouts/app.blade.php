<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700"
        rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('assets/css/bootstrap.min.css') }} " />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('assets/css/slick.css') }}" />
    <link type="text/css" rel="stylesheet" href=" {{ asset('assets/css/slick-theme.css') }} " />

    <!-- nouislider -->
     <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href=" {{ asset('assets/css/font-awesome.min.css') }} " />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
        crossorigin="anonymous"
    />


    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
@include('layouts.header')


<main>
    @yield('content')
</main>


@include('layouts.footer')



