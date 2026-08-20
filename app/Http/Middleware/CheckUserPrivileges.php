<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserPrivileges
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->hasRole('user')) {
            return redirect()->route('homeIndex')->with('error', 'ليس لديك صلاحية الوصول إلى لوحة تحكم المسؤول.');
        }
        return $next($request);
    }
}
