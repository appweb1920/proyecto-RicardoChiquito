<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Regalos Sandy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link type="text/css" href="app.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />

        @extends('layouts.app')     

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F8E0E0;
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
                font-size: 25px;
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

    @section('content')
    <body>
        
            <div class="content">
                <div class="title m-b-md">
                    NOVEDADES SANDY
                </div>

                <div class="links">
                    <H2>PEQUEÑA TIENDA DE
                     REGALOS PARA TODAS LAS OCASIONES</H2>
                     <a href="{{url('/vistaUsuario')}}">Clic aqui para ver Productos</a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div>
                    <img src="{{ asset('/images/joya1.JPG') }}" width="300" height="200">
                    <img src="{{ asset('/images/joya2.JPG') }}" width="300" height="200">
                    <img src="{{ asset('/images/joya3.JPG') }}" width="300" height="200">
                </div>
            </div>
            @endsection
    </body>
</html>
