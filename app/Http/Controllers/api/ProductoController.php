<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function index(){
        echo Producto::all();
    }

    public function show(Producto $producto){
        echo $producto;
    }

    public function store(Request $request){
        $prod = new Producto();
        $prod->nombre_producto  =   $request->nombre_producto;
        $prod->precio_costo     =   $request->costo;
        $prod->precio_venta     =   $request->venta;
        $prod->stock            =   $request->stock;
        $prod->save();
        echo $prod;
    }

    public function update(Request $request, Producto $producto){ 
        $prod= Producto::find($producto->id);
        if($request->nombre_producto)
        $prod->nombre_producto  =   $request->nombre_producto;

    if($request->costo)
        $prod->precio_costo     =   $request->costo;

    if($request->venta)
        $prod->precio_venta     =   $request->venta;

    if($request->stock)
        $prod->stock            =   $request->stock;

    $prod->update();
    echo $prod;
    }

    public  function destroy(Producto $producto){
        $producto -> delete();
        return "Se elimino correctamente";
    }
}
