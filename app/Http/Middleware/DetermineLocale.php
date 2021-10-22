<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DetermineLocale
{
    public function handle(Request $request, Closure $next): mixed
    {
        $availableLocales = config('app.available_locales', []);

        $locale = $request->route('locale', config('app.default_locale'));

        if (!array_key_exists($locale, $availableLocales)) {
            $locale = config('app.default_locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
