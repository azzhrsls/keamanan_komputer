<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (in_array($request->Akun()->role, $roles)) {
            return $next($request);
        }
        if (Auth::Akun()->role == 'admin') {
            return Redirect::to('/dashboard');
        } elseif (Auth::Akun()->role == 'operator') {
            return Redirect::to('/dashboard');
        } elseif (Auth::Akun()->role == '0') {
            return Redirect::to('/home');
        }

}
}
