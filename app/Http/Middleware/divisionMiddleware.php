<?php

namespace App\Http\Middleware;

use Closure;
use App\Division;

class divisionMiddleware
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
        if(Division::where('divisor',$request->input('divisor'))->first()->tieneDivisor()) {
            return $next($request);
        }
        return redirect('/denegado');
    }
}
