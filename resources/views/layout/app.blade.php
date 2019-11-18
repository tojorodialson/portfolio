<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
    <title>Tojo RODIALSON - A passion for the codes</title>
    @include('layout.head')
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @include('layout.footer-script')
</body>
</html>
