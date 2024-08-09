<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('access-admin', function (User $user) {
            return $user->admin;
        });

        Gate::define('update-post' , function(User $user , Post $post) {
            return $user->id === $post->user_id;
        });

        Gate::define('destroy-post' , function(User $user , Post $post) {
            return $user->id === $post->user_id;
        });
    }
}
