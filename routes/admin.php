<?php

use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\UsefulController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\IllnessController;
use App\Http\Controllers\Admin\AuthLogController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\AuthorityController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\MenuCategoryController;
use App\Http\Controllers\Admin\PageCategoryController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\VideoCategoryController;
use App\Http\Controllers\Admin\EstablishmentController;
use App\Http\Controllers\Admin\PhotoCategoryController;
use App\Http\Controllers\Admin\AnswerCategoryController;
use App\Http\Controllers\Admin\UsefulCategoryController;
use App\Http\Controllers\Admin\IllnessCategoryController;
use App\Http\Controllers\Admin\ManagementCategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', fn() => view('welcome'));

        Route::prefix('admin')
            ->group(function () {

                Route::middleware('auth')
                    ->group(function () {

                        Route::middleware('authoritySessionCheck')->group(function () {

                            Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

                            Route::middleware('can:admin')
                                ->group(function () {
                                    Route::controller(UserController::class)
                                        ->prefix('users')
                                        ->as('users.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('{users}', 'show')->name('show');
                                            Route::get('{users}/edit', 'edit')->name('edit');
                                            Route::patch('{users}', 'update')->name('update');
                                            Route::delete('{users}', 'destroy')->name('destroy');
                                        });

                                    Route::controller(AuthorityController::class)
                                        ->prefix('authorities')
                                        ->as('authorities.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('{authorities}', 'show')->name('show');
                                            Route::get('parent-list/{id}', 'parentList')->name('parent-list');
                                            Route::get('{authorities}/edit', 'edit')->name('edit');
                                            Route::patch('{authorities}', 'update')->name('update');
                                            Route::delete('{authorities}', 'destroy')->name('destroy');
                                        });
                                });

                            Route::middleware('can:content-manager')
                                ->group(function () {

                                    Route::controller(MenuCategoryController::class)
                                        ->prefix('menus-category')
                                        ->as('menus-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{menus_category}', 'show')->name('show');
                                            Route::get('{menus_category}/edit', 'edit')->name('edit');
                                            Route::get('{menus_category}/json', 'json')->name('json');
                                            Route::patch('{menus_category}', 'update')->name('update');
                                            Route::delete('{menus_category}', 'destroy')->name('destroy');
                                            Route::post('{menus_category}/restore', 'restore')->name('restore');
                                            Route::post('{menus_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(MenuController::class)
                                        ->prefix('menus')
                                        ->as('menus.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{menus}', 'show')->name('show');
                                            Route::get('{menus}/edit', 'edit')->name('edit');
                                            Route::patch('{menus}', 'update')->name('update');
                                            Route::delete('{menus}', 'destroy')->name('destroy');
                                            Route::post('{menus}/restore', 'restore')->name('restore');
                                            Route::post('{menus}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(NewsCategoryController::class)
                                        ->prefix('news-category')
                                        ->as('news-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{news_category}', 'show')->name('show');
                                            Route::get('{news_category}/edit', 'edit')->name('edit');
                                            Route::patch('{news_category}', 'update')->name('update');
                                            Route::delete('{news_category}', 'destroy')->name('destroy');
                                            Route::post('{news_category}/restore', 'restore')->name('restore');
                                            Route::post('{news_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(PageCategoryController::class)
                                        ->prefix('pages-category')
                                        ->as('pages-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{pages_category}', 'show')->name('show');
                                            Route::get('{pages_category}/edit', 'edit')->name('edit');
                                            Route::patch('{pages_category}', 'update')->name('update');
                                            Route::delete('{pages_category}', 'destroy')->name('destroy');
                                            Route::post('{pages_category}/restore', 'restore')->name('restore');
                                            Route::post('{pages_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(UsefulCategoryController::class)
                                        ->prefix('useful-category')
                                        ->as('useful-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{useful_category}', 'show')->name('show');
                                            Route::get('{useful_category}/edit', 'edit')->name('edit');
                                            Route::patch('{useful_category}', 'update')->name('update');
                                            Route::delete('{useful_category}', 'destroy')->name('destroy');
                                            Route::post('{useful_category}/restore', 'restore')->name('restore');
                                            Route::post('{useful_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(AnswerCategoryController::class)
                                        ->prefix('answers-category')
                                        ->as('answers-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{answers_category}', 'show')->name('show');
                                            Route::get('{answers_category}/edit', 'edit')->name('edit');
                                            Route::patch('{answers_category}', 'update')->name('update');
                                            Route::delete('{answers_category}', 'destroy')->name('destroy');
                                            Route::post('{answers_category}/restore', 'restore')->name('restore');
                                            Route::post('{answers_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(PhotoCategoryController::class)
                                        ->prefix('photos-category')
                                        ->as('photos-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{photos_category}', 'show')->name('show');
                                            Route::get('{photos_category}/edit', 'edit')->name('edit');
                                            Route::patch('{photos_category}', 'update')->name('update');
                                            Route::delete('{photos_category}', 'destroy')->name('destroy');
                                            Route::post('{photos_category}/restore', 'restore')->name('restore');
                                            Route::post('{photos_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::controller(VideoCategoryController::class)
                                        ->prefix('videos-category')
                                        ->as('videos-category.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('create', 'create')->name('create');
                                            Route::post('', 'store')->name('store');
                                            Route::get('trashes', 'trashes')->name('trashes');
                                            Route::get('{videos_category}', 'show')->name('show');
                                            Route::get('{videos_category}/edit', 'edit')->name('edit');
                                            Route::patch('{videos_category}', 'update')->name('update');
                                            Route::delete('{videos_category}', 'destroy')->name('destroy');
                                            Route::post('{videos_category}/restore', 'restore')->name('restore');
                                            Route::post('{videos_category}/forceDelete', 'forceDelete')->name('forceDelete');
                                        });

                                    Route::resources([
                                        'news' => NewsController::class,
                                        'pages' => PageController::class,
                                        'useful' => UsefulController::class,
                                        'answers' => AnswerController::class,
                                        'photos' => PhotoController::class,
                                        'videos' => VideoController::class,
                                        'managements-category' => ManagementCategoryController::class,
                                        'managements' => ManagementController::class,
                                        'regions' => RegionController::class,
                                        'messages' => MessageController::class,
                                        'contacts' => ContactController::class,
                                        'files' => FileController::class,
                                    ]);
                                });

                            Route::middleware('can:super-admin')
                                ->group(function () {

                                    Route::controller(LogController::class)
                                        ->prefix('logs')
                                        ->as('logs.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('{logs}', 'show')->name('show');
                                            Route::delete('{logs}', 'destroy')->name('destroy');
                                        });

                                    Route::controller(AuthLogController::class)
                                        ->prefix('authentication-logs')
                                        ->as('authentication-logs.')
                                        ->group(function () {
                                            Route::get('', 'index')->name('index');
                                            Route::get('{authentication_logs}', 'show')->name('show');
                                            Route::delete('{authentication_logs}', 'destroy')->name('destroy');
                                        });
                                });

                        });
                    });
            });
    });

Route::prefix('laravel-filemanager')
    ->middleware([
        'web', 'auth'
    ])->group(function () {
        Lfm::routes();
    });
