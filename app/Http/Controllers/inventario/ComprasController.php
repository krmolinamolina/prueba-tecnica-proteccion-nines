<?php

namespace App\Http\Controllers\inventario;

use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\DetalleCompra;
use App\Http\Controllers\Controller;

class ComprasController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $productos=Producto::all();
        return view('compras.create',compact('productos'));
    }

  
    public function store(Request $request)
    {
        $validData=$request->validate([
            'proveedor' => 'required',
            'producto' => 'required',
            'cantidad' => 'required|numeric',
            'precio_compra' => 'required|numeric',
        ]);

        $compra=new Compra();
        $compra->proveedor=$request['proveedor'];
        $compra->save();

        $detalle=new DetalleCompra();
        $detalle->compra_id=$compra->id_compra;
        $detalle->producto_id=$request['producto'];
        $detalle->cantidad=$request['cantidad'];
        $detalle->precio_compra=$request['precio_compra'];
        $detalle->save();
        
        return redirect('dashboard/inventario');
    }

   
}
