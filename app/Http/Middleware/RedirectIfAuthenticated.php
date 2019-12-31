<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard){
            case 'admin';
                if (Auth::guard($guard)->check()){
                    return redirect()->intended('/admin/admin');
                }
                break;
            default:
                if (Auth::guard($guard)->check()){
                    return redirect()->intended('/employee/dashboard');
                }
                break;
        }

        return $next($request);
    }
}


//
//namespace App\Http\Middleware;
//
//use Closure;
//use Illuminate\Support\Facades\Auth;
//
//class RedirectIfAuthenticated
//{
//    /**
//     * Handle an incoming request.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \Closure  $next
//     * @param  string|null  $guard
//     * @return mixed
//     */
//    public function handle($request, Closure $next, $guard = null)
//    {
//        if (Auth::guard($guard)->check()) {
//            return redirect('/home');
//        }
//
//        return $next($request);
//    }
//}
