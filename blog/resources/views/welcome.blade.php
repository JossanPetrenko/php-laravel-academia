<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Academia Gym</title>

        <!-- CSS -->
        <!-- <link href="home.css" rel="stylesheet" type="text/css" > -->
        @push('styles')
            <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
        @endpush


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
    @stack('styles')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Academia Gym
                </div>

                <div class="links">
                    <a href="{{ url('/pessoa') }}">Pessoas</a>
                    <a href="{{ url('/treino') }}">Treinos</a>
                </div>
            </div>
        </div>
    </body>
</html>
