<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;
use App\Genero;
use App\Comentario;

class Libro extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'portada',
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

    //Accessors
    public function getTituloAttribute($value)
    {
        return strtoupper($value);
    }
    public function getEditorialAttribute($value)
    {
        return strtoupper($value);
    }
    public function getEdicionAttribute($value)
    {
        return strtoupper($value);
    }

    public function setAutorAttribute($value)
    {
        $this->attributes['autor'] = ucwords($value);
    }
    //Fin Accesors
}
