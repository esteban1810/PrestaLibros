<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Comentario extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'contenido',
        'user_id',
        'comentario_id',
        'comentario_type'
    ];

    public function scopeCommentsLib($query,$id){
        return $query->where('comentario_type','=','App\Libro')->where('comentario_id','=',$id);
    }

    public function scopeCommentsUser($query,$id){
        return $query->where('comentario_type','=','App\User')->where('comentario_id','=',$id);
    }


    public function scopeLibroElim()
    {

    }



    public function comentario(){
        return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
