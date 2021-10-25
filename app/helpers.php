<?php

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

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
if (!function_exists('setting')) {
    function setting(string|array $name): Setting|Collection
    {
        return Setting::findByName($name);
    }
}

if (!function_exists('langAbbrToName')) {
    function langAbbrToName(string $abbr): string
    {
        // @todo Use a config for this
        return match ($abbr) {
            'nl'    => __('Dutch'),
            'en'    => __('English'),
            'li'    => __('Limburgish'),
            'de'    => __('German'),
            'fr'    => __('French'),
            'es'    => __('Spanish'),
            default => $abbr,
        };
    }
}
