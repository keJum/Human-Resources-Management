<?php

namespace App\Http\Middleware;

use Closure;

class CheckDeveloper
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
        if ($request->user()->hasRole('Devoloper'))
        return $next($request);
        else
        return back()->withInput();
    }
}
