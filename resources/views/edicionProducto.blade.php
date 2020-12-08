<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" href="app.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="stylePagina.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Edicion de los Datos</title>
</head>
@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    html, body {
    background-color: #F5BCA9;
    color: black;
    font-family: 'Nunito', sans-serif;
    font-weight: 10px;
    font-size:18px;
    height: 100px;
    margin: 0;
    }
</style>
@section('content')
<body>
    
    <form class="form-register2" action="guardaEdicion" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$Producto->id}}">
        <h4> Formulario de Productos </h4>
        <h2>Producto - {{$Producto->Nombre}}</h2> <br>
        <br>
        <img src="{{ asset('/storage/images/'.$Producto->Foto) }}"  width="180" height="100">
        <br>
        <br>
        
        <h2>Imagen del Producto:</h2>
        <input type="file"class="controls2" name="arch" id="arch" accept="image/png, image/jpeg">
        <h2>Nombre del Producto:</h2>
        <input class="controls2" type="text" name="Nombre" value="{{$Producto->Nombre}}"/><br>
        <h2>Descripcion:</h2>
        <input class="controls2"  type="text" name="Descripcion" value="{{$Producto->Descripcion}}"/><br>
        <h2>Numero de Piezas:</h2>
        <input class="controls2"  type="text" name="NumeroProductos" value="{{$Producto->NumeroProductos}}"/><br>
        <h2>Costo:</h2>
        <input class="controls2"  type="text" name="Precio" value="{{$Producto->Precio}}"/><br><br>
        <button class="buttons" type="submit" >Enviar</button><br><br>

        <a href="{{url('/home')}}">
            <button type="button" class="buttons2" >Regresar</button>
        </a>
    </form> 
</body>
</html>