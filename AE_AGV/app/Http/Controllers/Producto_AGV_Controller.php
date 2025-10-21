<?php

namespace App\Http\Controllers;

use App\Models\Producto_AGV;
use Illuminate\Http\Request;

class Producto_AGV_Controller extends Controller
{
    /**
     * Mostrar listado de productos
     */
    public function index()
    {
        $productos = Producto_AGV::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Mostrar detalle de un producto específico
     */
    public function show($id)
    {
        $producto = Producto_AGV::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
