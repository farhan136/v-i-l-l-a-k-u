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
    public function handle(Request $request, Closure $next, $roles = "")
    {
        if (Auth::guard('admin')->check()) {
            $peran = Auth::guard('admin')->user()->roles;
            if ($peran !== $roles) { //$roles adalah yang dikirim lewat route web.php
                return redirect()->back()->with('error','Kamu gapunya akses!');
            }
            return $next($request);   
        }else{
            return redirect('/loginadmin');
        }

        
    }
}
