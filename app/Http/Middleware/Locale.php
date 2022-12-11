<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


class Locale
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
        if (Session::get('locale') && in_array(Session::get('locale'), ['fr', 'en', 'zh', 'ru'])) {
            return $next($request);
        }

        if ($request->is('locale*')) {
            return $next($request);
        }

        return $next($request);

    }
}
