<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listado de Piezas</title>
</head>
<body>
    <h2>Listado de Productos</h2><br>
    <table class="table" >
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Numero de Productos</th>
                <th>Precio</th>
                <th>Edicion de Productos</th>
                <th>Eliminacion</th>
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
                <td><a href="/editar/{{$Pieza->id}}">Editar</a></td>
                <td><a href="/borrar/{{$Pieza->id}}">Eliminar</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
       
    <a href="{{url('/datos')}}">
        <button type="button" class="btn btn-primary" >Agregar Pieza</button>
    </a>
  
</body>
</html>