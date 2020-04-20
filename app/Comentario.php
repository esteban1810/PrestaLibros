<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======

>>>>>>> master
use App\User;

class Comentario extends Model
{
    
    protected $fillable = [
        'contenido',
<<<<<<< HEAD
        'user_id',
        'comentario_id',
        'comentario_type'
=======
        'comentario_id',
        'comentario_type',
        'user_id'
>>>>>>> master
    ];
    
    public function comentario(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
