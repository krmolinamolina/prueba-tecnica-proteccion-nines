<?php

namespace App\Http\Controllers\inventario;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventarioController extends Controller
{

    public function index()
    {
        return view('inventario.index');
    }

    public function create()
    {
        return view('inventario.create');
    }


    public function store(Request $request)
    {
        $validData=$request->validate([
            'nombre' => 'required',
            'descripcion' => 'required|max:850'
        ]);

        $producto=new Producto();
        $producto->nombre=$request['nombre'];
        $producto->descripcion=$request['descripcion'];
        $producto->save();
        
        return redirect('dashboard/inventario');
    
    }



    public function edit($id)
    {
        $producto=Producto::find($id);
        return view('inventario.edit',compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $validData=$request->validate([
            'nombre' => 'required',
            'descripcion' => 'required|max:850'
        ]);

        $producto=Producto::find($id); 
        $producto->nombre = $request['nombre'];
        $producto->descripcion = $request['descripcion'];
    }


    public function destroy($id)
    {
        $producto=Producto::find($id); 
        $producto->delete();
        return back();
    }
}
