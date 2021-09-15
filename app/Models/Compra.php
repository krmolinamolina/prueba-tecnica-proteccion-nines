<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    
    const UPDATED_AT = null;
    protected $primaryKey = 'id_compra';

    protected $fillable = [
        'id_compra',
        'total',
        'proveedor',
        'created_at',
    ];
}
