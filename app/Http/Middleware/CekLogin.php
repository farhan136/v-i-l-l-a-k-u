<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            // dd(Auth::guard('admin')->check());
            // return redirect('/loginadmin');
            return redirect()->route('loginadmin');
        }
        return $next($request);   
    }
}
