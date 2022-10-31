<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;

class VisitorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id === 6) {
            $link = Link::where('id_visitor', auth('visitor')->id())->first();
            if ($link) {
                $urlRegis = route('home.registrasi', [$link->id_visitor, $link->token]);
                return to_route('home.registrasi');
            }
            return $next($request);
        } else {
            return to_route('home.dashboard-page');
        }
    }
}
