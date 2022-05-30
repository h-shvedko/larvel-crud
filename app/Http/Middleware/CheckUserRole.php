<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param mixed ...$roles
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles): Response|RedirectResponse
    {
        foreach($roles as $role) {
            if(!$request->user()->hasRole($role))
                return redirect('login');
        }

        return $next($request);
    }
}
