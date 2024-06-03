<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BreederMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {if(!Auth::check()){
        if(Auth::user()->is_admin==1){
            Auth::logout();
            return redirect()->route('/login')->with('message','Kamu bukan Breeder');
        }
    }
        return $next($request);
    }
}
