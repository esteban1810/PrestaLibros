<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Comentario extends Model
{
    
    protected $fillable = [
        'contenido',
        'comentario_id',
        'comentario_type',
        'user_id'
    ];
    
    public function comentario(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
