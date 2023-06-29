<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    // ...

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return redirect()->route('home.index');
        }
    }
}