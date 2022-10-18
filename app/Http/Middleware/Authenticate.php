<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\URL;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // return route('auth.login');
            if ($request->routeIs('home.*')) {
                session()->flash('fail', 'You must login first');
                return route('auth.login', [
                    'fail' => true,
                    'returnUrl' => URL::current()
                ]);
            }

            // return route('home.dashboard-page');
        }
    }
}
