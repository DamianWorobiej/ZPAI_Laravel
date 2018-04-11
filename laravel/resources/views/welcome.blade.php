<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lekko zmieniona strona przykładowa</title>
-->
        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

        <!-- Styles -->
        <!--<style>
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
        </style>-->
		@extends('layouts.layout')
		<title>Strona główna</title>
    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
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
                    Lekko zmieniona strona przykładowa
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
					<a href="https://google.pl">Link do Googla</a>
                </div>
            </div>
        </div>-->
		
		
		<!--@section('content')-->
		@section('content')
		<div class="container">
		<a data-toggle="lightbox" href="#demoLightbox">

    <img src="https://dummyimage.com/600x400/000/fff" class="small-img">

  </a>
  <div id="demoLightbox" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">

    <div class='lightbox-dialog'>

        <div class='lightbox-content'>

            <img src="https://dummyimage.com/600x400/000/fff">

            <div class='lightbox-caption'>

                Write here your caption here

            </div>

        </div>

    </div>

  </div>
  
    <a data-toggle="lightbox" href="#demoLightbox2">

    <img src="https://dummyimage.com/600x500/000/fff" class="small-img">

  </a>

  <div id="demoLightbox2" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">

    <div class='lightbox-dialog'>

        <div class='lightbox-content'>

            <img src="https://dummyimage.com/600x500/000/fff">

            <div class='lightbox-caption'>

                Write here your caption here

            </div>

        </div>

    </div>

  </div>
		</div>
		@endsection
    </body>
</html>
