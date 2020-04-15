<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    
    protected $fillable = [
        'contenido',
        'comentario_id',
        'comentario_type'
    ];
    
    public function comentario(){
        return $this->morphTo();
    }
}
