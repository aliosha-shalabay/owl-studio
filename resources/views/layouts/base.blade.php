<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$setting->seo_desc}}">
    <meta name="Keywords" content="{{$setting->seo_keywords}}">
    <link rel="shortcut icon" type="image/x-icon" href="/images/icon.png"/>

    <title>{{$setting->seo_title}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141261771-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-141261771-1');
    </script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="pre-loader">
    <div class="spinner"></div>
</div>

@include('include.navbar')

@yield('content')

@include('include.footer')

<!-- Scripts -->
<script src="{{ asset('js/all.js') }}" defer></script>
</body>
</html>
