<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
                if (\Auth::user()->isAdmin == true) {
                    return $next($request);
                }
        
                return redirect()->route('admin.dashboard'); // If user is not an admin.
    }
        
}
