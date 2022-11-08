<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $table = 'ordenes';
    protected $fillable = [
        'cliente_id',
        'producto_id',
        'orden_anterior_id',
        'nombre',
        'cantidad',
        'fecha_vencimiento',
        'observaciones',
        'estado'
    ];
}
