<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if (request()->route()->parameters()["ad"]->id != auth()->user()->id) {
            return abort(403);
        }

        return $next($request);
    }
}
