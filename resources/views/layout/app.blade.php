<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="propeller" content="465f0d77882d9aca85b7afcaa09fb560">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
    {!! SEO::generate() !!}
    @include('layout.head')
    @include('layout.pub-2')
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @include('layout.footer-script')
    @include('layout.analytics')
    @include('layout.pub-1')
</body>
</html>
