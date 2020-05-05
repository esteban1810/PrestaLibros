<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Genero;
use App\Comentario;

class Libro extends Model
{
    protected $fillable = [
        'autor',
        'titulo',
        'editorial',
        'edicion',
        'anio',
        'genero_id',
        'descripcion'
    ];

    public function comentarios(){
        return $this->morphMany(Comentario::class,'comentario');
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function genero(){
        return $this->belongsTo(Genero::class);
    }
}
