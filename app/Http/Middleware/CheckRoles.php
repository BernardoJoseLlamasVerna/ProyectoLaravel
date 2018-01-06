<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    public function handle($request, Closure $next)
    {
        //devuelve un array con todos los párametros de la función en la que estamos: en este caso
        //request, next y los roles
        //$roles = func_get_arg();

        //si queremos sacar parámetros fuera: solo tendremos un array de roles.
        $roles = array_slice(func_get_args(), 2);

        //si es el admin le dejamos pasar (misma validación que en layout)
        if(auth()->user()->hasRoles($roles))
        {
          //lo dejamos pasar:
          return $next($request);
        }

        //en caso contrario redirecciona al index
        return redirect('/');
    }
}
