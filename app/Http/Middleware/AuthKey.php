<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        $consid = $request->header('x-cons-id');
        $time = $request->header('x-timestamp');
        $sign = $request->header('x-signature');
        $keys = $request->header('pengguna');
        if ($consid != 'ABC' || $time != '123' || $sign != 'QWE' || $keys != '123') {
            return response()->json([
                'message' => 'APP Key Not Found'
            ], 401);
        }
        return $next($request);
    }
}
