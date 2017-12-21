<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
      public function handle($request, Closure $next, $roleName)
      {
        if(! $request->user()->hasRole($roleName))
        {
            return redirect()
                ->to('login');  
        }
        return $next($request);
      }
}
