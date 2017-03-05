<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.less') }}" rel="stylesheet/less">
    
    <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Amiko|Sanchez|Shrikhand" rel="stylesheet">

    <!-- JAVASCRIPT FILES -->
        <!-- jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- LESSCSS-->
            <script>
              less = {
                env: "development",
                async: false,
                fileAsync: false,
                poll: 1000,
                functions: {},
                dumpLineNumbers: "comments",
                relativeUrls: false,
                rootpath: ":/a.com/"
              };
            </script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
        <!--tinymce-->
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script>tinymce.init({ selector:'textarea' });</script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- IE FIX -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <![endif]-->
</head>
    <body>
        
        @include('partials.header')
        
        @yield('content')
        
    </body>
</html>