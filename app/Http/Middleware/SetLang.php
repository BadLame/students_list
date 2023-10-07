<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class SetLang
{
    function handle(Request $request, Closure $next): Response
    {
        if ($langs = $request->getLanguages()) {
            $lang = collect($langs)->firstWhere(fn(string $l) => !Str::contains($l, '_'));
            App::setLocale($lang);
        }
        return $next($request);
    }
}
