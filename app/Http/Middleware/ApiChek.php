<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
class ApiChek
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
        $fullUrl = route('apicenters');
        $contains = Str::contains($fullUrl, ['api']);
        dump($contains);
        if($request->routeIs('apicenters') && $request->method() ==='POST'){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
