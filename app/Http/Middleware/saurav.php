<?php

namespace App\Http\Middleware;

use Closure;

class saurav
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
        // dump and die
        // $http = explode('.', $_SERVER['HTTP_HOST']);
        // if($http[0]=='sanjay') {

            return $next($request);
        // }
        // return response(404);
    }
}
