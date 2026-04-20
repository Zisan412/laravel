<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DummyAuth
{
    
    public function handle($request, Closure $next)
{
    $isLoggedIn = false;
    if (!$isLoggedIn) {
        return redirect('/task39');
    }
    return $next($request);
}
}
