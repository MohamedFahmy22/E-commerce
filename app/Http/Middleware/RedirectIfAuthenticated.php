<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            /* write code for redirect both for admin or front in case login already done
                admin/*  ==> mean admin/اي كلام بعدها
            */
            if(Auth::guard($guard)->check()){
                if ($request->is('admin')|| $request->is('admin/*')) {
                    // return redirect for admin dashboard
                     // return redirect(RouteServiceProvider::HOME);
                    //return redirect(RouteServiceProvider::Admin);
                    return redirect(RouteServiceProvider::Admin);
                }else{
                    // return redirect for users dashboard
                   // return redirect(RouteServiceProvider::HOME);
                   return redirect(RouteServiceProvider::Admin);
                }
            }

            }


        return $next($request);
    }
}
