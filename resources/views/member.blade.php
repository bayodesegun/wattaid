<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
        <!--[if IE]><link rel="shortcut icon" href="img/favicon.png"><![endif]-->

        <!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 
        <link rel="apple-touch-icon-precomposed" href="img/favicon-mobile.png">

        <!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. -->
        <link rel="icon" href="img/favicon.png">

        <title>@yield('title') WattAid</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <!-- Material Design fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">


        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
        
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-material-design.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/ripples.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/flex-style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('js/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/layout/wide.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">

        <script src="{{asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    </head>
    <body>
        
        @include('shared.user-navbar')

        @yield('content')

        @include('shared.footer')

        <script src="{{asset('js/vendor/jquery-1.10.2.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap.js')}}"></script>

        <!-- Material Design Scripts -->
        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('js/retina-1.1.0.min.js')}}"></script>
        <script src="{{asset('js/jquery.cookie.js')}}"></script>
        <script src="{{asset('js/styleswitch.js')}}"></script>
        <script src="{{asset('js/jquery.superfish.js')}}"></script>
        <script src="{{asset('js/jquery.jpanelmenu.js')}}"></script>
        <script src="{{asset('js/jquery.blackandwhite.min.js')}}"></script>
        <script src="{{asset('js/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
        <script src="{{asset('js/jquery.blackandwhite.min.js')}}"></script>
        <script src="{{asset('js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('js/jquery.jcarousel.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('js/swipe.js')}}"></script>

        <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
        
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
    </body>
</html>
