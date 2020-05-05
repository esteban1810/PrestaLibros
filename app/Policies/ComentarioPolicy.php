<?php

namespace App\Policies;

use App\User;
use App\Comentario;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComentarioPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function acceso(User $user,Comentario $comentario){
        return $user->id == $comentario->user_id;
    }
}
