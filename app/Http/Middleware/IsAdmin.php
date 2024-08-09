<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Verifier si l'utilisateur connecte est un admin
        if(auth()->user()->admin == 1) {        
            //Si oui, on continue notre requete
            return $next($request);
        } else{
            //Sinon on fait un abort 403
            abort(403);
        }


    }
}
