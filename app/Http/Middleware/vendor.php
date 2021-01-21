<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class vendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next = null,$guard = null)
    {
         if (Auth::guard($guard)->check()) {
            if (auth()->guard('vendor')->user()->status == 0) {
                auth()->guard('vendor')->logout();
                Session::put('message','Your Account is blocked by Admin');
                return redirect('vendor/login');
            }
           return $next($request);
        }
       
        else{
            return redirect('/vendor/login');
        }

        
    }
}