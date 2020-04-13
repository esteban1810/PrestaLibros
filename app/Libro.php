<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'autor',
        'titulo',
        'editorial',
        'edicion',
        'anio',
        'descripcion'
    ];
}
