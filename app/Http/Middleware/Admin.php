<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin() == 1) {
            return $next($request);
        } else if (Auth::check() && Auth::user()->isAdmin() == 2) {
            return redirect('/students');
        }
        return redirect('/');
    }
}
