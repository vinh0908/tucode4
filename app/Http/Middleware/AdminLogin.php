<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            //cái này nó so sánh điều kiện ở trong database xem phải tài khoản admin không nó mới cho vô nè
            if(Auth::user()->admin == 4 || Auth::user()->admin == 3){
                return $next($request);
            }
            return redirect('/');
        }
        return redirect('/');
    }
}
