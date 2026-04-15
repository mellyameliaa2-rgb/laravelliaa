<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
{

    if (!auth()->check()) {
        abort(403);
    }

    $role = optional(auth()->user()->role)->role_name;

    if (!$role || !in_array(strtolower($role), array_map('strtolower', $roles))) {
        abort(403);
    }

    return $next($request);
}
}
