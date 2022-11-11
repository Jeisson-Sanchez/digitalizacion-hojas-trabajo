<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiro extends Model
{
    use HasFactory;

    protected $table = 'tiros';
    protected $fillable = [
        'tiro',
        'descripcion',
        'estado',
    ];
}