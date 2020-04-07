<?php

namespace App\Http\Middleware;

use Closure;

class checkDelivery
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
                if (\Auth::user()->role == '3' && isAdmin == false) {
                    return $next($request);
                }
        
                return redirect()->route('deliveryman.index'); // If user is not an admin.
    }
        
}
