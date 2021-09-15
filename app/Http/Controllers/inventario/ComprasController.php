<?php

namespace App\Http\Controllers\inventario;

use App\Models\Compra;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\DetalleCompra;
use App\Http\Controllers\Controller;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos=Producto::all();
        return view('compras.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //
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
