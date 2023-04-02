<?php
namespace Flynn314\Middleware;

use Illuminate\Http\Request;

final class AllowCors
{
    public function handle(Request $request, \Closure $next): mixed
    {
        return $next($request)->header('Access-Control-Allow-Origin', '*');
    }
}
