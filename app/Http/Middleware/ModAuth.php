<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModAuth
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

        if(Auth::check()){
            if(Auth::user()->type == 'admin' || Auth::user()->type == 'mod'){
                return $next($request);
            }else{
                return redirect('/login');
            }
        }
        else{
            return redirect('/');
        }
    }
}
