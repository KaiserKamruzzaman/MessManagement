<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if($request->session()->get('members')->type_id!=1)
        {
            return redirect()->route('user.index',[$request->session()->get('members')->mem_id]);
        }
        
        return $next($request);
    }
}
