<?php

namespace App\Providers;

use App\User;
use App\Book;

use App\Policies\BookPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Book::class => BookPolicy::class
    ];

    /**
     * Register any application authentication / authorization services
     * 
     * @param  GateContract $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //Modo não produtivo, pq precisa criar um por um... Usar Policies
        /*$gate->define('update-book', function(User $user, Book $book){
            return $user->id == $book->user_id;
        });*/
    }
}
