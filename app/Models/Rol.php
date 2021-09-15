<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rol extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'rol_id';

    protected $fillable = [
        'rol_id',
        'nombre',
       
    ];

 
}
