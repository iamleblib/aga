<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !Auth::user()->isAdmin() && !Auth::user()->isBlocked()) {
            return $next($request);
        } else if (Auth::user()->isBlocked()) {
            auth()->logout();
            return redirect()->route('errors.block');
        } else {
            return redirect()->route('admin.index');
        }
    }
}
