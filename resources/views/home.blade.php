@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Regalos Sandy</title>
<style>
    html, body {
        background-color: #848484;
        color: black;
        font-style: oblique;
        font-family: cursive;
        font-weight: 10px;
        font-size:18px;
        height: 100px;
        margin: 0;
        align-items: center;
        text-align: center;
        justify-content: center;
    }	
    .centrado{
        text-align:center;
        font-style: oblique;
        font-family: cursive;
        font-weight: 10px;
        font-size:35px;
    }
    .btn-primary{
        align-items: center;
        text-align: center;
        justify-content: center;
    }
	
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="centrado">Listado de Productos</p><br>
             <table class="table table-hover table-dark" >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Numero de Productos</th>
                        @if(Auth::user()->tipo != '1')
                        @else
                        <th>Status de Producto</th>
                        @endif
                        <th>Precio</th>
                        @if(Auth::user()->tipo != '1')
                        @else
                        <th>Editar Producto</th>
                        <th>Quitar Producto</th>
                        @endif
                    </tr>  
                </thead>
                <tbody>
                    @foreach($Producto as $Producto)
                    <tr>
                        <td>{{$Producto->id}}</td>
                        <td><img src="{{ asset('/storage/images/'.$Producto->Foto) }}"  width="180" height="100"></td>
                        <td>{{$Producto->Nombre}}</td>
                        <td>{{$Producto->Descripcion}}</td>
                        <td>{{$Producto->NumeroProductos}}</td>
                        @if(Auth::user()->tipo != '1')
                        @else
                            @if($Producto->NumeroProductos <= 5)
                            <td style="background-color:red"><p>Por Agotarse</p></td>
                            @else
                            <td style="background-color:green"><p>Disponible</p></td>
                            @endif 
                        @endif
                        <td>{{$Producto->Precio}}</td> 
                        @if(Auth::user()->tipo != '1')
                        @else
                        <td><a href="/editar/{{$Producto->id}}"><img src="{{ asset('/images/edit.ico')}}" width="50" height="50"></a></td>
                        <td><a href="/borrar/{{$Producto->id}}"><img src="{{ asset('/images/trash.ico')}}" width="50" height="50"></a></td>
                        @endif
                    </tr> 
                     @endforeach
                </tbody>
            </table>
            @if(Auth::user()->tipo != '1')  
            @else
            <a href="{{url('/agregaProductos')}}">
               <button type="button" class="btn btn-primary  btn btn-dark" >Agregar Producto</button>
            </a>
             @endif 
        </div>
    </div>
</div>
@endsection
