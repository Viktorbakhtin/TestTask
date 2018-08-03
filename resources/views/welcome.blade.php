<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                font-family: 'Didact Gothic', sans-serif;
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
                color: #BDBDBD;
                font-size: 100px;
               line-height: 300px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: #7dc4b7;
                padding: 20px;
                width: 5%;
                border-radius: 20px;
                margin: 10px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    My site
                </div>

                <div class="links">
                    <a href="{{ url('/mysql') }}">MYSQL</a>
                    <a href="{{ url('/1') }}">Задание №1</a>
                    <a href="{{ url('/2') }}">Задание №2</a>
                    <a href="{{ url('/3') }}">Задание №3</a>
                    <a href="{{ url('/4') }}">Задание №4</a>
                    <a href="{{ url('/5') }}">Задание №5</a>
                    <a href="{{ url('/6') }}">Задание №6</a>
                    <a href="{{ url('/7') }}">Задание №7</a>
                    <a href="{{ url('/8') }}">Задание №8</a>
                    <a href="{{ url('/9') }}">Задание №9</a>
                </div>
            </div>
        </div>
    </body>
</html>
