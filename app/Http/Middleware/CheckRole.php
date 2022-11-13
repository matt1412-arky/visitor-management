<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Link;

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
            'cleaningservice' => [4],
            'vendor' => [5],
            'visitor' => [6]
        ];
        $rolesIds = $roles[$role] ?? [];
        if (in_array(auth()->user()->role_id, $rolesIds)) {
            $response = $next($request);

            return $response;
        }
        abort(403);
    }
}
