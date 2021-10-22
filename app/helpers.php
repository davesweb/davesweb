<?php

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

if (!function_exists('humanDate')) {
    function humanDate(int $year, int $month, ?int $day = null): string
    {
        $date = Carbon::create($year, $month, $day ?? 1);

        setlocale(LC_ALL, app()->getLocale());

        $format = '%B %Y';
        if (null !== $day) {
            $format = '%d %B %Y';
        }

        return $date->formatLocalized($format);
    }
}

if (!function_exists('localeUrl')) {
    function localeUrl(string $abbr): string
    {
        if ($abbr === config('app.default_locale')) {
            return config('app.url');
        }

        return (string) Str::of(config('app.locale_url'))->replace('{locale}', $abbr);
    }
}
