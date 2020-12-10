<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Productos</title>
    
    @extends('layouts.app')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    html, body {
    background-color:#BDBDBD;
    color: black;
    font-family: 'Nunito', sans-serif;
    font-weight: 10px;
    font-size:18px;
    height: 100px;
    margin: 0;
    }

    .title
{
    margin-left: 600px;
    font-size: 16pt;
}

.contenedor
{
    margin: 0px 60px 0px 60px;
    height: 370px;
    overflow: hidden;
    text-align:center;
}

.cuadros
{ 
    background-color:#585858;
    margin: 30px 0px 0px 45px;
    width: 250px;
    border:3px solid #cccccc;
    height: 250px;
   
}

.cuadros:hover
{
    background-color: #E6E6E6;
    height: 300px;
    border:1px solid #cccccc;
    box-shadow: 2px 2px 2px 2px #cccccc;
}

.elementos
{
    margin: 30px 0px 0px 30px;
    
}

.cuadros:hover .elementos
{
    top:50px;
}

.save
{
    background-color: #f96666;
    color: white;
    text-transform: uppercase;
    font-family: Tahoma;
    font-size: 11pt;
    border-radius: 3px;
    text-decoration: none;
    display: block;
    margin: -20px 0px 0px 130px;
    width: 38px;
    padding-left: 5px;
    position: absolute;
}

.new
{
    background-color: gray;
    color: white;
    text-transform: uppercase;
    font-family: Tahoma;
    font-size: 11pt;
    border-radius: 3px;
    text-decoration: none;
    display: block;
    margin: -20px 0px 0px 130px;
    width: 38px;
    padding-left: 5px;
    position: absolute;
}

.titulo
{
    color: black;
    font-style: oblique;
    font-family: cursive;
    text-transform: uppercase;
    font-family: Tahoma;
    text-align:center;
    font-size: 15px;
    border-radius: 3px;
    text-decoration: none;
    display: block;
    margin: 25px 0px 0px 0px;
    padding-left: 15px;
    position: absolute;
    transition: top 1.2s;
}

.titulo:hover
{
    color: #92c5d9;
}

.precioN
{   
    color: gray;
    text-transform: uppercase;
    font-family: Tahoma;
    font-size: 11pt;
    border-radius: 3px;
    display: block;
    text-decoration: line-through;
    margin: 50px 0px 0px 70px;
    padding-left: 5px;
    position: absolute;
}

.precioA
{
    color: #92c5d9;
    text-transform: uppercase;
    font-family: Tahoma;
    font-size: 11pt;
    border-radius: 3px;
    display: block;
    text-decoration: none;
    margin: 35px 0px 0px 50px;
    padding-left: 5px;
    position: absolute;
}

.precioAz
{
    color: #92c5d9;
    text-transform: uppercase;
    font-family: Tahoma;
    font-size: 11pt;
    border-radius: 3px;
    display: block;
    text-decoration: none;
    margin: 35px 0px 0px 60px;
    padding-left: 5px;
    position: absolute;
}

.iconos
{
    width: 250px;
    height: 40px;
    margin: 330px 0px 0px 0px;
    transition: top 2s;
    top: 0px;
    position: relative;
}

.cuadros:hover .iconos
{
    position: absolute;
}

.fa-search
{
    color: black;
    background-color: #e9da5d;
    border-radius: 50px;
    transform: scale(1.7);
    margin: 10px 0px 0px 70px;
    padding: 4px;
    transition: top 1.2s;
    position: absolute;
}

.fa-search:hover
{
    color: white;
    background-color: #92c5d9;
}


.fa-shopping-cart
{
    color: white;
    background-color: #92c5d9;
    border-radius: 50px;
    transform: scale(1.7);
    margin: 10px 0px 0px 150px;
    padding: 4px;
    transition: top 1.2s;
    position: absolute;
}

.fa-shopping-cart:hover
{
    color: black;
    background-color: #e9da5d;
}


.caja
{
    margin: 20px;
    width: 270px;
    height: 250px;
    float: left;
    overflow: hidden;
}
.capa
{
    width: 270px;
    height: 250px;
    background-color: #333333;
    position: relative; 
    top: -255px;
    opacity: 0;
    transition: opacity 1s;
}
.caja:hover .capa
{
    opacity: .6;
}
.enlace
{
    color:black;
    background-color: white;
    text-decoration: none;
    position: relative;
    top: -250px;
    left: 100px;
    padding: 20px;
    border-radius: 50px;
    width: 20px;
    display: block;
    transform: scale(1.2);
    transition: all .5s;
    opacity: 0;
}
.enlace:hover
{
    color:white;
    background-color: #92c5d9;
}
.caja:hover .enlace
{
    opacity: 1;
    top:-360px;
    transform: scale(1);
}

.texto2
{
    color: #92c5d9;;
    font-family: Arial;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    position: absolute;
    top: -410px;
    transition: top .5s;
}
.caja:hover .texto2
{
    top:-510px;
    position: relative;
}
.texto
{
    color: white;
    font-family: Arial;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    position: absolute;
    top: -570px;
    transition: top .5s;
    display: block;
}
.texto:hover
{
    color: #92c5d9;
}
.caja:hover .texto
{
    top:-530px;
    position: relative;
}
.cont
{
    width: 50%;
    margin: 0px 0px 0px 90px;
}
</style>                
@section('content')
</head>
<body >
<header class="title"><b>PRODUCTOS</b></header>
<div class="row">
    @foreach($Producto as $Producto)
        <div class="col-8 col-md-3">
            <div class="cuadros">
                <div class="elementos">
                    
                    <td><img src="{{ asset('/storage/images/'.$Producto->Foto) }}"  width="180" height="100"></td>
                    <a class="titulo" href="#"><td>{{$Producto->Nombre}}</td></a>
                    <div>
                        <div style ="float: left;"><a class="precioN"><td>{{$Producto->Precio}}</td></a></div>
                    </div>
                </div> 
            </div>
        </div>
    @endforeach
    
</div>
<br>
<br>
<br>
<br>
<br>
<a href="{{url('/')}}">
   <button type="button" class="btn btn-primary  btn btn-dark" >Regresar</button>
</a>
</body>
@endsection
</html>