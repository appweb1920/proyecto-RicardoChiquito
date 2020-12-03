<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use SoftDeletes;
    protected $table = "Producto";
    protected $filleable = ['id', 'Nombre', 'Descripcion', 'NumeroProductos', 'Precio'];
}
