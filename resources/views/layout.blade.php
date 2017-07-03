<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="msapplication-tap-highlight" content="no" />

        <title>Amber Rozema</title>

        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/images/Home/eendje_2.png')}}" />

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/style.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/nav-style.css')}}"/>
    	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/global/mobile-menu.css') }}">
        @yield('css')

        <!-- jQuery -->
        <script type="text/javascript" src="{{ URL::asset('js/global/analytics.js')}}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/global/jquery-3.1.1.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{ URL::asset('js/global/modernizr.2.5.3.min.js') }}"></script> -->
        <script type="text/javascript" src="{{ URL::asset('js/global/mobile-menu.js')}}"></script>
        @yield('js')

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
