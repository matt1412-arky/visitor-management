<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // protected $except = ['h/dashboard-page'];
    public function handle(Request $request, Closure $next, string $role)
    {
        $roles  = [
            'superadmin' => [1],
            'employee'   => [1, 2],
            'security' => [1, 3],
            'visitor' => [4]
        ];
        $rolesIds = $roles[$role] ?? [];
        if (in_array(auth()->user()->role_id, $rolesIds)) {
            return $next($request);
        }
        abort(403);
    }
}
