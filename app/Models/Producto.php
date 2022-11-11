<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = [
        'papel_id',
        'corte_id',
        'tiro_id',
        'tipo_id',
        'color_id',
        'retiro',
        'tamano',
        'numeracion_ini',
        'numeracion_fin',
        'estado'
    ];
}
