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
    <title>Document</title>
</head>
<body>
    <form class="form-register" action="/envio" method="POST" enctype="multipart/form-data">
        @csrf
        <h4> Formulario de Producto </h4>
        <h2>Nombre del Producto:</h2>
        <input class="controls2" type="text" name="Nombre" placeholder="Ingresa el Nombre del Producto"/><br>
        <h2>Descripcion:</h2>
        <input class="controls2"  type="text" name="Descripcion" placeholder="Descripcion del Producto"/><br>
        <h2>Numero de Piezas:</h2>
        <input class="controls2"  type="text" name="NumeroProductos" placeholder="Numero de Productos"/><br>
        <h2>Costo:</h2>
        <input class="controls2"  type="text" name="Precio" placeholder="Costo del Producto"/><br>
        <button class="buttons" type="submit">Enviar</button><br>
        <br>
        
        <a href="{{url('/muestraProductos')}}">
            <button type="button" class="buttons2" >Regresar</button>
        </a>
    </form>    

    
</body>
</html>