<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CHeckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , ...$roles)
    {
      if(!Auth::check())
      return redirect("/login");

      $x = in_array (Auth::user()->role,$roles);
      if(!$x)
      {
      return redirect("/home");
    }

    return $next($request);
    }
}
