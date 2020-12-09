<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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
</style>
@section('content')
<form action="guardaEdicion" method="POST" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$Producto->id}}">
<img src="{{ asset('/storage/images/'.$Producto->Foto) }}"  width="180" height="100">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre del Producto</label>
      <input class="controls2" type="text" name="Nombre" value="{{$Producto->Nombre}}"/>
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword4">Descripcion</label>
      <input class="controls2"  type="text" name="Descripcion" value="{{$Producto->Descripcion}}"/>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Numero de Productos</label>
    <input class="controls2"  type="text" name="NumeroProductos" value="{{$Producto->NumeroProductos}}"/>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Costo</label>
      <input class="controls2"  type="text" name="Precio" value="{{$Producto->Precio}}"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity">Imagen</label>
    <input type="file"class="controls2" name="arch" id="arch" accept="image/png, image/jpeg">
  </div>
  <button type="submit" class="btn btn-primary btn btn-dark">Editar</button>
</form>
@endsection
</body>
</html>