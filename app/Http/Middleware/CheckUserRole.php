<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    use AuthenticatesUsers;
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
            if($request->user()->hasRole($role)){
                return $next($request);
            }
        }

        return redirect('/');
    }
}
