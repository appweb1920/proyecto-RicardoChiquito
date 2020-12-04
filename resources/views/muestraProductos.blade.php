<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" href="app.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listado de Piezas</title>
</head>
<body>
<section class="cajamenusuperior">
        <div class="contactos">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fas fa-phone-alt"></i>01-800-4937-628</a>
                <a href="#"><i class="fas fa-envelope-open"></i>VIDEOGAMES.com</a>
        </div>
            
</section>

    <header class="header">
        <div class="wrapper">
           <a href='/agregaProductos'> <img class="logo" src="" alt="logo" width="50" height="50" ALIGN="left"></a>
        </div>
    </header>

    <nav  class="form-register2">
    <h2>Listado de Productos</h2><br>
        <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Numero de Productos</th>
                    <th>Precio</th>
                    <th>Editar Producto</th>
                    <th>Quitar Producto</th>
                </tr>  
            </thead>
            <tbody>
                @foreach($Producto as $Producto)
                <tr>
                    <td>{{$Producto->id}}</td>
                    <td>{{$Producto->Nombre}}</td>
                    <td>{{$Producto->Descripcion}}</td>
                    <td>{{$Producto->NumeroProductos}}</td>
                    <td>{{$Producto->Precio}}</td> 
                    <td><a href="/editar/{{$Producto->id}}">Editar</a></td>
                    <td><a href="/borrar/{{$Producto->id}}">Eliminar</a></td>
                </tr> 
                @endforeach
            </tbody>
           
        </table>
        <a href="{{url('/agregaProductos')}}">
            <button type="button" class="buttons3" >Agregar Producto</button>
        </a>
    </nav>
       
    
</body>
</html>