<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css" />

    </head>



<!-- Section connexion -->
    <body>



        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Espace perso</a>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif



<!-- section slider et menu -->
            <div class="content">
                <div class="title m-b-md">
                <img id="logo2" src="{{ asset('frontend/image/Logo_stick.png') }}" alt="pain" class="logo img-responsive"> 
                </div>

                <div id="menu">
                <div class="links">


                
                    <a href="https://laravel.com/docs">Qui suis-je ? </a>
                    <a href="https://laracasts.com">Réalisations</a>
                    <a href="https://laravel-news.com">les évènements</a>
                    <a href="https://blog.laravel.com">Ateliers</a>
                    <a href="https://nova.laravel.com">Contact</a>
                </div>
                </div>

            </div>
        </div>




    </body>
</html>
