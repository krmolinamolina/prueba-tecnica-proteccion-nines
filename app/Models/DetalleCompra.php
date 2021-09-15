<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'compra_id',
        'producto_id',
        'cantidad',
        'precio_compra',
    ];
}
