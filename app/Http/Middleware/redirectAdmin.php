<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class redirectAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $guard=null): Response
    {
        if (Auth::guard($guard)->check() && Auth::user()->isAdmin == 1) {
            return redirect()->route('admin.dashboard');
        }
        return $next($request);
    }
}
