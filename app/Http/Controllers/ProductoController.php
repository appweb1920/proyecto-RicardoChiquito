<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function agregaProducto()
    {
        $Producto = Producto::all();
        return view('CreacionProducto')->with('Producto',$Producto);
    }


    public function muestraProducto()
    {
        $Producto = Producto::all();
        return view('muestraProductos')->with('Producto',$Producto);
        
    }
    public function index()
    {
        //
    }

    
    public function create(Request $request)
    {

        $Producto = Producto::all();
        $nuevoProducto = new Producto;
        $nuevoProducto->Nombre = $request->Nombre;
        $nuevoProducto->Descripcion = $request->Descripcion;
        $nuevoProducto->NumeroProductos = $request->NumeroProductos;
        $nuevoProducto->Precio = $request->Precio;
        $nuevoProducto->save();

        return  redirect('/muestraProductos');
    
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nuevoProducto = Producto::find($id);
        return view('edicionProducto')->with('Producto',$nuevoProducto);
    }

    public function guardaEdicion(Request $request)
    {
        $nuevoProducto = Producto::find($request->id);
        if(!is_null($nuevoProducto))
        {
            $nuevoProducto->Nombre = $request->Nombre;
            $nuevoProducto->Descripcion = $request->Descripcion;
            $nuevoProducto->NumeroProductos = $request->NumeroProductos;
            $nuevoProducto->Precio = $request->Precio;
            $nuevoProducto->save();
        }
        return redirect('/muestraProductos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
