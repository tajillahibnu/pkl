<?php

namespace Modules\Panel\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SiteMetaMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        view()->share('siteMeta', getSiteMeta());
        return $next($request);
    }
}
