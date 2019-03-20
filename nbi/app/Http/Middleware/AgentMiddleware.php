<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AgentMiddleware
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
        if ($request->user() && $request->user()->role != 'Agent')
        {
            return new Response(view('unauthorized')->with('web', 'AGENT'));

        }
        return $next($request);
    }
}
