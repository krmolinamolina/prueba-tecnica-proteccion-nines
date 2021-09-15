<?php

namespace App\Models;

use App\Models\Cliente;
use App\Models\DetalleVenta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    const UPDATED_AT = null;
    protected $primaryKey = 'id_venta';

    protected $fillable = [
        'id_venta',
        'total',
        'estado',
        'cliente_id',
        'created_at',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'cliente_id');
   }

   public function detalle()
    {
        return $this->hasMany(DetalleVenta::class,'venta_id');
    }
}
