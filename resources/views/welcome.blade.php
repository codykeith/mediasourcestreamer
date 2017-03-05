<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md fontLogo">
                    Media Source Streamer
                </div>

                <div class="links">
                    Please visit <a href="http://specialdivisionsolutions.com/">Special Division Solutions</a> to learn more about our streaming services.
                </div>
            </div>
        </div>
    </body>
</html>
