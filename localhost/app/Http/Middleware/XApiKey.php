<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('x-api-key');
        if ($token != 'duck') return response()->json(["error" => 'Wrong api key'], 401);

        return $next($request);
    }
}

