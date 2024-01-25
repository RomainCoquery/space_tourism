<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            $locale = session('locale');

            // Assurez-vous que la locale est valide
            if (in_array($locale, ['en', 'fr'])) {
                App::setLocale($locale);
            }
        }
        return $next($request);
    }
}