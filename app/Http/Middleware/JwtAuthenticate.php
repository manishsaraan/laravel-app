<?php

namespace App\Http\Middleware;

use Closure;

class JwtAuthenticate
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
        //hadle our logic here
        //check for jwt
        return $next($request);
    }
}
