<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'nombre',
        'descripcion',
        'stock',
    ];

}
