<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Printele</title>
    <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    {{--<link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
    <script>var baseUrl = "{{url('/')}}/";</script>

</head>
<body style="background-color:ghostwhite;">
<div class="wrapper">

    {{-- yields the contents from fld:superadmin --}}
    @yield('contents')

    @yield('footers')

</div>
<script type="text/javascript" src="{{asset('bower_components/jquery/dist/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>--}}
@yield('scripts')
</body>
</html>