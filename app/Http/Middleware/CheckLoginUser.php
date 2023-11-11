<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
class CheckLoginUser
{
    public function handle(Request $request, \Closure $next)
    {
        if(get_data_user('users')) return $next($request);

        return redirect()->to('/');
    }
}
