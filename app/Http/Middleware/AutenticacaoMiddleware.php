<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao)
    {

        echo $metodo_autenticacao;


        if(true){
            return $next($request);
        }else{
            return Response('Exige autenticação');

        }
    }
}
