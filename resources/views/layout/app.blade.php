<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="propeller" content="465f0d77882d9aca85b7afcaa09fb560">
    <meta name="description" content="I'm Tojo RODIALSON, backend developer since 2014. I choose this job because I have a passion for codes. I've been working on different projects in recent years to always improve how to code and meet different people.">
    <meta name="keywords" content="Tojo RODIALSON, backend developer, back-end developer, web developer, website builder, developer, freelancer developer, laravel developer, php developer, java developer, c# developer">
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
    <title>Tojo RODIALSON - A passion for the codes</title>
    @include('layout.head')
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @include('layout.footer-script')
    @include('layout.analytics')
</body>
</html>
