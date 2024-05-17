<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Language;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $locale = Session::get('language');

        if (!$locale) {
            $defaultLanguage = Cache::rememberForever('default_language', function () {
                return Language::where('is_default', true)->value('code');
            });

            $locale = $defaultLanguage ?? config('app.locale');
            Session::put('language', $locale);
        }

        app()->setLocale($locale);

        return $next($request);
    }
}


