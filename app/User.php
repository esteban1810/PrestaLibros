<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Comentario;
use App\Libro;
use App\Genero;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeComments($consulta,$id)
    {
        return $consulta->findOrFail($id);
    }

    public function comentarios(){
        return $this->morphMany(Comentario::class,'comentario');
    }

    //Relaciones
    // public function comentarios(){
    //     return $this->hasMany(Comentario::class,'user_id');
    // }

    public function libros(){
        return $this->belongsToMany(Libro::class);
    }

    public function genero(){
        return $this->belongsTo(Genero::class);
    }
    //fin Relaciones

    //Mutators
    public function setFirstNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    //Fin Mutators

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
