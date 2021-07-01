<?php

namespace App\Http\Middleware;

use Subfission\Cas\Middleware\CASAuth as CASAuth;
use Subfission\Cas\Middleware\RedirectCASAuthenticated as RedirectCASAuthenticated;
use Closure;

class CasAuthenticate extends CASAuth
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next)
        {
            if( ! cas()->checkAuthentication() )
            {
                if ($request->ajax()) {
                    return response('Unauthorized.', 401);
                }
                cas()->authenticate();
            }
            session()->put('cas_user', cas()->user() );
            session()->put('cas_attributes', cas()->getAttributes() );
            return $next($request);
        }
}