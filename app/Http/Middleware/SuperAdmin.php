<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('admin') ? true : null;
        }); 

        return redirect()->url('/home')
        ->with('unsuccess', "You don't have access to that section");
    }

}
