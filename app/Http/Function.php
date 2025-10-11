<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// st_route
if (! function_exists('st_route')) {
    function st_route(?string $url = null, string|bool|null $locale = null): string
    {
        return LaravelLocalization::localizeUrl($url, $locale);
    }
}
