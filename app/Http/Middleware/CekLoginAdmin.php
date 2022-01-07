<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if (!session('login_admin')) {
        //     return redirect('/loginadmin');
        // }

        if (!Auth::guard('admin')->check()) {
            return redirect('/loginadmin');
        }

        return $next($request);
    }
}
