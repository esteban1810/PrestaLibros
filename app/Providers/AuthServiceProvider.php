<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Comentario;
use App\Policies\ComentarioPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Comentario::class => ComentarioPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function(){
            if(\Auth::id() == 1){
                return true;
            }else{
                return false;
            }
        });

        Gate::define('accionComentario', function ($user, $comentario) {
            return $user->id === $comentario->user_id;
        });
    }
}
