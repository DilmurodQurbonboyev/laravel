<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', function () {
            return view('welcome');
        });
    });
