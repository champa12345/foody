<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class checkLogin
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
        if(!Auth::check()){
            return redirect('dangnhap');
        }
        return $next($request);
    }
}
