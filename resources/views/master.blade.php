<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>@yield('title') WattAid</title>

        <!-- Material Design fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">
    
    </head>
    <body>
        
        @include('shared.navbar')

        @yield('content')

        @include('shared.footer')

        <script src="{{asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
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
    </body>
</html>
