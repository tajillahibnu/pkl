<?php

namespace Modules\Panel\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChekActionMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
