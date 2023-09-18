<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return response()->json(["message" => "unauthorized"], 401);
        }
        if (auth()->user()->role() !== "author") {
            return response()->json(["message" => "only author can access"], 403);
        }
        return $next($request);
    }
}
