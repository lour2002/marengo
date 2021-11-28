<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CheckLanguage
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
        /** Set Locale */
        $locale = $request->locale ?? config('app.locale');

        abort_if(! in_array($locale, config('app.locales')), 404);

        app()->setLocale($locale);

        $cookie = $request->cookie('locale');

        $response = $next($request);

        if ($locale !== $cookie) {
            $response->withCookie('locale', $locale);
        }

        return $response;
    }
}
