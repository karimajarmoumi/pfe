<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use guard;
use Auth;
use Illuminate\Http\Request;

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

        foreach ($guards as $guard){
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) 
            {
                //return redirect()->intended('admin/dashboard');
                return redirect()->route('admin.dashboard');
            }
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 2)
            { 
               // return redirect()->intended('gestionnaire/dashboard');
               return redirect()->route('gestionnaire.dashboard');
            }
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 3)
            { 
               return redirect()->route('chef.dashboard');
            }
            if (Auth::guard($guard)->check() && Auth::user()->role_id == 4)
            { 
               return redirect()->route('membre.dashboard');
            }
            else { return $next($request); }
            
        }
    }
}
