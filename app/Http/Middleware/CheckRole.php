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
            if ($rolesIds[0] === 6) {
                $link = Link::where('id_visitor', auth('visitor')->id())->first();
                if ($link || $request->routeIs('home.registrasi')) {
                    // $urlRegis =  url('h/registrasi/' . $link->id_visitor . '/' . $link->token);
                    // back to url register jika pknya masih ada di table link
                    // return redirect()->route('home.registrasi', [$link->id_visitor, $link->token]);
                    session()->first('msg', 'you must register before continuing');
                }
                return $next($request);
            }
            return $next($request);
        }
        abort(403);
    }
}
