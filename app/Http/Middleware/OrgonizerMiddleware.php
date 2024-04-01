<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrgonizerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->roles()->first()->name == 'organizer') {
            $user = auth()->user();
            if ($user->status == 'banned') {
                auth()->logout();
                return redirect()->route('login');
            }
            return $next($request);
        }

        return redirect()->route('login')->with('message', 'Unauthorized');
    }

}
