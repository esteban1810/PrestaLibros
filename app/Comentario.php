<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comentario extends Model
{
    
    protected $fillable = [
        'contenido',
        'user_id',
        'comentario_id',
        'comentario_type'
    ];
    
    public function comentario(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
