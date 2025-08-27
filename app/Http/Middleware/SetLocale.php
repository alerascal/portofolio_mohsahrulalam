<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Cek dari session, kalau tidak ada pakai default app.locale
        $locale = Session::get('locale', config('app.locale'));

        // Pastikan hanya locale yang valid
        if (in_array($locale, ['en', 'id', 'ar', 'ja', 'ko'])) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
