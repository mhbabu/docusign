<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME', 'Laravel-App') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- {!! Html::style('css/all.min.css') !!} --}}

    <!-- Styles -->
    {!! Html::style('css/custom.css') !!}
    {!! Html::style('css/style.css') !!}

    @yield('header-css')

</head>

<body>
    @yield('content')
    {!! Html::script('js/jquery-3.6.0.min.js') !!}
    {!! Html::script('js/signature_pad.min.js') !!}
    {!! Html::script('js/jquery.easing.min.js') !!}
    {!! Html::script('js/jquery.validate.min.js') !!}
    {!! Html::script('js/script.js') !!}
    @yield('footer-script')
</body>

</html>
