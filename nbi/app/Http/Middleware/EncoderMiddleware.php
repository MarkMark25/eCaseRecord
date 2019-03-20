<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class EncoderMiddleware
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

        if ($request->user() && $request->user()->role != 'Encoder')
        {

        return new Response(view('unauthorized')->with('web', 'ENCODER'));

        }

        return $next($request);
    }
}
