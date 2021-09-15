<?php

namespace App\Http\Controllers\inventario;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VentasController extends Controller
{

    public function index()
    {
        return view('ventas.index');
    }


    public function create()
    {
        $productos=Producto::all();
        $clientes=Cliente::all();
        return view('ventas.create',compact('productos','clientes'));
    }


    public function store(Request $request)
    {
        $validData=$request->validate([
           
            'producto' => 'required',
            'cliente' => 'required',
            'cantidad' => 'required|numeric',
           
        ]);

        $venta=new Venta();
        $venta->cliente_id=$request['cliente'];
        $venta->save();

        $detalle=new DetalleVenta();
        $detalle->venta_id=$venta->id_venta;
        $detalle->producto_id=$request['producto'];
        $detalle->cantidad=$request['cantidad'];
        $detalle->save();
        
        return redirect('dashboard/inventario/ventas');
    }


}
