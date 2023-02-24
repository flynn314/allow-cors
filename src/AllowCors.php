<?php
namespace Flynn314\Middleware;

use Illuminate\Http\Request;

final class AllowCors
{
    /**
     * Handle an incoming request
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, PATCH, DELETE, OPTIONS',
            'Access-Control-Allow-Headers' => 'DNT, X-CustomHeader, Keep-Alive, User-Agent, X-Requested-With, If-Modified-Since, Cache-Control, Content-Type, Content-Range, Range, Authorization',
        ];
        foreach ($headers as $name => $value) {
            if (!$request->hasHeader($name)) {
                $next($request)->header($name, $value);
            }
        }

        return $next($request);
    }
}
