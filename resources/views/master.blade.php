<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printele</title>
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/slick-carousel/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script>var baseUrl = "{{url('/')}}/";</script>

</head>
<body background="{{url('images/bg2.png')}}">
<div class="wrapper">

    @include('partials.nav')
    {{-- yields the contents from fld:pages --}}
    @yield('contents')

    @include('partials.footer')

</div>
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/slick-carousel/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dropzone.js')}}"></script>
@yield('scripts')
</body>
</html>