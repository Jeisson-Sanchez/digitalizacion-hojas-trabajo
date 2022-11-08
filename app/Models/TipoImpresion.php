<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImpresion extends Model
{
    use HasFactory;

    protected $table = 'tipo_impresiones';
    protected $fillable = [
        'tipo',
        'descripcion',
        'estado',
    ];
}
