<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link href="{{ asset('css/primer.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
    /*@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap');*/
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;500&display=swap');

    body, h1, h2, h3, h4, h5, h6, p, a {
        font-family: 'Roboto mono', sans-serif;
        /*letter-spacing: .2px;*/
    }

    h1, h2, h3, h4 {
        font-weight: 500;
    }

    body, h5, h6, p, a {
        font-weight: 300;
    }

    .font-light {
        font-weight: 300 !important;
    }

    a {
        color: inherit;
        transition: 0.2s;
    }

    a:hover {
        color: inherit;
        opacity: 0.6;
        text-decoration: none;
    }

    a.link-red {
        color: #e3342f;
    }

    a.link-red:hover {
        color: #e3342f;
        opacity: 0.6;
    }

    .collapsed {
        max-height: 100px;
        overflow-y: hidden;
    }

    </style>

        @stack('header')
    </head>
    <body>
        <div class="py-5">
            @yield('content')
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
