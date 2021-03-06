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
        return view('home')->with('Producto',$Producto);
        
    }
    public function index()
    {
        $Producto = Producto::all();
        return view('vistaUsuario')->with('Producto',$Producto);
    }

    
    public function create(Request $request)
    {

        $Producto = Producto::all();
        $nuevoProducto = new Producto;
        $nuevoProducto->Nombre = $request->Nombre;
        $nuevoProducto->Descripcion = $request->Descripcion;
        $nuevoProducto->NumeroProductos = $request->NumeroProductos;
        $nuevoProducto->Precio = $request->Precio;
        $nuevoProducto->foto="";
        $nuevoProducto->save();
        $archivo=$request->file('arch');
        $path= $request->file('arch')->storeAs(
            'public/images', $nuevoProducto->id.".".$archivo->getClientOriginalExtension()
        );
        //dd($path);
        $nuevoProducto->foto= $nuevoProducto->id.".".$archivo->getClientOriginalExtension();
        $nuevoProducto->save();

        return  redirect('/home');
    
    }

    public function pruebaArchivo(Type $var = null)
    {
        return view('creacionProducto');
    }

    public function guardaArchivo(Request $request)
    {
        $archivo=$request->file('arch');
        $path= $request->file('arch')->storeAs(
            'public/images', $nuevoProducto->id.".".$archivo->getClientOriginalExtension()
        );
        $nuevoProducto->foto= $nuevoProducto->id.".".$archivo->getClientOriginalExtension();
        
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
        $nuevoProducto->Nombre = $request->Nombre;
        $nuevoProducto->Descripcion = $request->Descripcion;
        $nuevoProducto->NumeroProductos = $request->NumeroProductos;
        $nuevoProducto->Precio = $request->Precio;
        
        if(!is_null($request->file('arch')))
        {
            $archivo=$request->file('arch');
            $path= $request->file('arch')->storeAs('public/images',$nuevoProducto->id.".".$archivo->getClientOriginalExtension());
            $nuevoProducto->foto=$nuevoProducto->id.".".$archivo->getClientOriginalExtension();
        }        
        $nuevoProducto->save();
        
        return redirect('/home');
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
        $Producto = Producto::find($id);
        $Producto->delete();
        return redirect('home');
    }
}
