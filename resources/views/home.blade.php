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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <nav  class="form-register2">
    <h2>Listado de Productos</h2><br>
        <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Numero de Productos</th>
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
                    <td>{{$Producto->Precio}}</td> 
                    @if(Auth::user()->tipo != '1')
                    @else
                    <td><a href="/editar/{{$Producto->id}}">Editar</a></td>
                    <td><a href="/borrar/{{$Producto->id}}">Eliminar</a></td>
                    @endif
                </tr> 
                @endforeach
            </tbody>
           
        </table>

        @if(Auth::user()->tipo != '1')
            
        @else
        <a href="{{url('/agregaProductos')}}">
            <button type="button" class="buttons3" >Agregar Producto</button>
        </a>
        @endif
        
    </nav>
       
        </div>
    </div>
</div>
@endsection
