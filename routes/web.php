<?php

use App\Http\Middleware\WebConfig;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter;

Route::prefix(LaravelLocalization::setLocale())->middleware([LaravelLocalizationRedirectFilter::class, WebConfig::class])->name('starteam.')->group(function () {
    // Home
    Route::get('/', function () {
        return view('index');
    })->name('home');
});
