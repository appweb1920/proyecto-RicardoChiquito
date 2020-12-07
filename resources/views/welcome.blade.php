<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Regalos Sandy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" href="app.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F5BCA9;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 10px;
                height: 100px;
                margin: 0;
            }

            .full-height {
                height: 60px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                background-color: #A9F5F2;
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
                align-items: center;
                text-align: center;
                margin:100px;
            }

            .title {
                justify-content: center;
                font-size: 84px;
            }

            .links > a {
                color: red;
                padding: 25px;
                font-size: 18px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
            <div class="content">
                <div class="title m-b-md">
                    NOVEDADES SANDY
                </div>

                <div class="links">
                    <H2>PEQUEÑA TIENDA DE
                     REGALOS PARA TODAS LAS OCASIONES</H2>
                     <a href="{{url('/vistaUsuario')}}">Clic aqui para ver Productos</a>
                </div>
            </div>
        
    </body>
</html>
