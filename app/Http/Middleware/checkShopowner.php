<?php

namespace App\Http\Middleware;

use Closure;

class checkShopowner
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
                if (\Auth::user()->role == '2' && isAdmin == false) {
                    return $next($request);
                }
        
                return redirect()->route('shopowner.index'); // If user is not an admin.
    }
        
}
