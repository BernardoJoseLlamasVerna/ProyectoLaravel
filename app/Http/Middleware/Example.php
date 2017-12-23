<?php

namespace App\Http\Middleware;

use Closure;

class Example
{
    public function handle($request, Closure $next)
    {
      if(false)
      {
        return $next($request);
      }

      return response("No puedes continuar", 404);
    }
}
