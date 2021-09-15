<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class IndexList extends Component
{
    use WithPagination;
    public $buscar;
    public $ano;

    public function mount(){
        $hoy = getdate();

        $year=$hoy['year'];
        $mes=$hoy['mon'];
        $dia=$hoy['mday'];
        $this->ano="".$year."-".$mes."-".$dia."";
    }

    public function render()
    {
        $ventas = Venta::with('cliente');
        if ($this->buscar) {
            $busca=$this->buscar;
            $ventas->where(function($b) use ($busca) {
                    $b->orWhere('nombre','like','%'.$busca.'%')
                    ->orWhere('descripcion','like','%'.$busca.'%');
                    });
        }
        $ventas=$ventas->paginate(10);
        return view('livewire.ventas.index-list',compact('ventas'));
    }
}
