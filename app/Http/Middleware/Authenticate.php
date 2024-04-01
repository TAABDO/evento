<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $this->authenticate($request, $guards);

        if (auth()->check()) {
            $user = auth()->user();
            if ($user->status == 'banned') {
                auth()->logout();

                return redirect()->route('login')->with('message', 'You are banned because: '.$user->ban_reason);
            }
        }

        return $next($request);
    }
}
