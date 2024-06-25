<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            if ($request->is('admin/*')) {
                return route('admin.create');
            }
            return route('login');
        }
    }
}
