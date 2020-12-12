<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="stylePagina.css"!-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"!-->
    <title>Edicion de los Datos</title>
</head>
<body>
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

    .form-register3{
    width: 700px;
    height:900px;
    background-color: #848484;
    padding: 30px;
    margin: auto;
    margin-top: 50px;
    border-radius: 4px;
    font-family: 'calibri';
    color: black;
    text-align:center;
   }

  .controls2{
    width: 100%;
    background-color: #F5F6CE;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 16px;
    border: 1px solid #1f53c5;
    font-family: 'calibri';
    font-size: 18px;
  }
</style>

@section('content')
<form class="form-register3" action="guardaEdicion" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$Producto->id}}">
<img src="{{ asset('/storage/images/'.$Producto->Foto) }}"  width="180" height="100"><br><br>

      <h4>Nombre del Producto</h4>
      <input class="controls2" type="text" name="Nombre" value="{{$Producto->Nombre}}"/>
  

      <br><br><h4>Descripcion:</h4>
      <input class="controls2"  type="text" name="Descripcion" value="{{$Producto->Descripcion}}"/>
      <h4>Numero de Productos:</h4>
  <input type="number" class="controls2" id="tentacles" name="NumeroProductos" value="{{$Producto->NumeroProductos}}" min="0" max="50">
  
    
  <h4>Precio:</h4>
      <input class="controls2"  type="text" name="Precio" value="{{$Producto->Precio}}"/>
  <br><br><h4>Imagen:</h4>
      <input type="file"class="controls2" name="arch" id="arch" accept="image/png, image/jpeg">
 <br><br> <button type="submit" class="btn btn-primary btn btn-dark">Editar</button>
  </div>
</form>
@endsection
</body>
</html>