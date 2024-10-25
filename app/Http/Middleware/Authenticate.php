<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if(! $request->expectsJson()){
            //return route('login');
            if($request->routeIS('author.*')){
                session()->flash('fail',`You must sign in to access this page`);
                return route('author.login');
            }
        }
    }
}
