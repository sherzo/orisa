<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Authenticate
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

        if (Sentinel::guest()) {
            if ($request->ajax() || $request->wantsJson()) {

                return response('Unauthorized.', 401);

            } else {
                
                return redirect()->guest(action('AuthenticateController@index'));
            }
        }

        return $next($request);
    }
}
