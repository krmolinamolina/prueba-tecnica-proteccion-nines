<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id_log';

    protected $fillable = [
        'id_log',
        'accion',
        'user_id',
    ];

 
}
