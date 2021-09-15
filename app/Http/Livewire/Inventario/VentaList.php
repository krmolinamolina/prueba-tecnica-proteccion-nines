<?php

namespace App\Http\Livewire\Inventario;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentaList extends Component
{
    use WithPagination;
    
    public function render()
    {
    //    $fecha=

        $ventas = Venta::with('cliente');
        if ($this->buscar) {
            $busca=$this->buscar;
            $ventas->where(function($b) use ($busca) {
                    $b->orWhere('nombre','like','%'.$busca.'%')
                    ->orWhere('descripcion','like','%'.$busca.'%');
                    });
        }
        $ventas=$ventas->paginate(10);

        return view('livewire.inventario.venta-list',compact('ventas'));
    }
}
