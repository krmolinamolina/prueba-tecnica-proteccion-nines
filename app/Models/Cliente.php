<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'id_cliente',
        'cedula',
        'pri_nombre',
        'seg_nombre',
        'pri_apellido',
        'seg_apellido',
    ];
}
