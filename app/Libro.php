<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

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

    public function comentarios(){
        return $this->morphMany(Comentario::class,'comentario');
    }

    public function users(){
        return $this->belongsToMany(user::class);
    }
}
