<?php

use Illuminate\Support\Carbon;

if (!function_exists('humanDate')) {
    function humanDate(int $year, int $month, ?int $day = null): string
    {
        $date = Carbon::create($year, $month, $day ?? 1);

        setlocale(LC_ALL, app()->getLocale());

        $format = '%B %Y';
        if ($day !== null) {
            $format = '%d %B %Y';
        }

        return $date->formatLocalized($format);
    }
}
