<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        {{-- <link rel="SHORTCUT ICON" href="http://127.0.0.1:8000/images/a.jpg"> --}}
        <title>LYN'S</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/startmin.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        @yield('css-admin')
    </head>
    <body>
        <div id="wrapper">
            @include('admin.home-admin.layouts.header')
            @yield('content')
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu.min.js') }}"></script>
        @yield('javascript-admin')
        <!-- jQuery -->
    </body>
</html>
