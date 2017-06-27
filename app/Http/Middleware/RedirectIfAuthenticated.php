<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
    
        if (Sentinel::check()) 
        {
            if(Sentinel::getUser()->roles()->first()->slug === '7')
            {
                return redirect('/client');
                
            } else {
                
                return redirect('/admin');
            }
        }

        return $next($request);
    }
}
