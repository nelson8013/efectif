<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 2)
            {
                return redirect()->route('crs-dashboard');

            }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 3)
            {
                return redirect()->route('tl-dashboard');

            }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 4)
            {
                return redirect()->route('fm-dashboard');

            }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 5)
            {
                return redirect()->route('fa-dashboard');

            }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 6)
            {
                return redirect()->route('meExec-dashboard');

            }elseif(Auth::guard($guard)->check() && Auth::user()->role_id == 7)
            {
                return redirect()->route('meStf-dashboard');
            }
        }

        return $next($request);
    }
}
