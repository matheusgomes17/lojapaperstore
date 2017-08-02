<?php

namespace Snaketec\Http\Middleware;

use Closure;

class AfterMeasuresBudgets
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
        $request['height'] = session()->get('measures')['height'];
        $request['width'] = session()->get('measures')['width'];

        return $next($request);
    }
}
