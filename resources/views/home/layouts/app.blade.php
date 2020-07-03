<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <LINK REL="SHORTCUT ICON"  HREF="{{asset('images/icon_115004_1571992573_13.png')}}">
    <title>{{ config('app.name', 'LYNS') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/addStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
    @include('home.layouts.header')
    @yield('content')
    @include('home.layouts.footer')
    {{-- js --}}
    <script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/owl.carousel.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js "></script>
    <script src="{{ asset('bootstrap/js/wow.min.js') }}"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=225776282171633&autoLogAppEvents=1"></script>
    <script src="{{ asset('js/home/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/home/main.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{asset('bootstrap/js/toastr.min.js')}}"></script>
    @yield('javascript')
</body>
</html>
