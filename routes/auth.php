<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Auth::routes([
            'register' => false,
            'reset' => false,
            'verify' => false,
        ]);

        Route::prefix('admin')
            ->group(function () {

                Route::controller(LoginController::class)->group(function () {
                    Route::get('/oneId', 'oneId')->name('oneId');
                    Route::get('/check', 'check')->name('check');
                    Route::get('/login-site', 'getLoginSiteForm')->name('getLoginSiteForm');
                    Route::post('/login-site', 'setLoginSiteForm')->name('setLoginSiteForm');
                });

                Route::controller(AdminController::class)->group(function () {
                    Route::get('select-role', 'getRole')->name('getRole');
                    Route::get('change-role', 'changeRole')->name('changeRole');
                    Route::post('select-role', 'setRole')->name('setRole');
                });
            });
    });

