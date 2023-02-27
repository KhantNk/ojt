<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */ public function handle($request, Closure $next)
    {
        // if (!$request->is('login') && (!Session::has('id') || !Session::has('name'))) {
        //     return redirect('login');
        // }
        // return $next($request);
    }
}
