<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $data = [
            ['name'=> 'Yamada', 'email'=> 'yamada@taro'],
            ['name'=> 'hanako', 'email'=> 'hanako@flower'],
            ['name'=> 'sachiko', 'email'=> 'sachiko@happy']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
