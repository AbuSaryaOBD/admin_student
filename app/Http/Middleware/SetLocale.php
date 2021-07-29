<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLocale
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
        $rawLocale = Cookie::get('app_locale') ?: config('app.locale');
        $locale = explode('-', $rawLocale);
        if (count($locale) == 2) {
            App::setLocale($locale[0]);
            config()->set('backpack.base.html_direction', $locale[1]);
        }

        return $next($request);
    }
}
