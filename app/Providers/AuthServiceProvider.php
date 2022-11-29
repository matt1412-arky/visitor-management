<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use App\Models\Link;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('visit', function ($user) {
            if (auth('visitor')->check() && $user->isRegistered()) {
                return false || null;
            }
            return true;
        });

        // Gate::before(function () {
        //     $link = Link::where('id_visitor', Auth::user()->id)->first();
        //     if ($link || 1) return false;
        //     return true;
        // });
        // Gate::forUser($user)->allows('registered-only', function () {
        //     dd('dd');
        // });
        // Gate::define('registered', function () {
        //     dd('');
        // });

        //
    }
}
