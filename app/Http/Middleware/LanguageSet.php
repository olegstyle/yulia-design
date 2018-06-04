<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Lang;

/**
 * Class Language
 * @package App\Http\Middleware
 *
 * @author Oleh Borysenko <olegstyle1@gmail.com>
 */
class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $supportedLanguages = config('app.supported_locales');
        $lang = $request->cookie('lang');
        if ($lang !== null) {
            if (in_array($lang, $supportedLanguages)) {
                $this->setLocale($lang);

                return $next($request);
            }

            // forget incorrect lang
            Cookie::forget('lang');
        }

        $acceptLanguages = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE', config('app.locale')));
        foreach ($acceptLanguages as $lang) {
            $lang = strtolower(substr(trim($lang), 0, 2));
            if (in_array($lang, $supportedLanguages)) {
                $this->setLocale($lang);

                return $next($request);
            }
        }

        $this->setLocale(config('app.locale'));

        return $next($request);
    }

    protected function setLocale(string $locale): void
    {
        view()->share('lang', $locale);
        Lang::setLocale($locale);
    }
}
