<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Formateur;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is_formateur', function(User $user) {
           return $user->role->name == "formateur";
        });

        Gate::define('is_user', function(User $user) {
            return $user->role->name == "utilisateur";
         });

         Gate::define('formateur_create_compte',function(User $user){
            return $user->role->name=='formateur' && $user->prorietaire_id ==! NULL  ;
        });

    }
}
