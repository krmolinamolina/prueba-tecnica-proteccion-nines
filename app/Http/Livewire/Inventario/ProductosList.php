<?php

namespace App\Http\Livewire\Inventario;

use Livewire\Component;
use App\Models\Producto;
use Livewire\WithPagination;

class ProductosList extends Component
{
    use WithPagination;
    public $buscar;

    public function render()
    {
        $productos = Producto::orderBy('id_producto','desc');
        if ($this->buscar) {
            $busca=$this->buscar;
            $productos->where(function($b) use ($busca) {
                    $b->orWhere('nombre','like','%'.$busca.'%')
                    ->orWhere('descripcion','like','%'.$busca.'%');
                    });
        }
        $productos=$productos->paginate(10);
        return view('livewire.inventario.productos-list',compact('productos'));
    }
}
