<?php

use App\Http\Controllers\Admin\ConfigController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::get('charts/contact', 'Charts\ContactChartController@response')->name('charts.contact.index');
    Route::get('config', [ConfigController::class,"index"])->name('config.index');
    Route::post('config', [ConfigController::class,"store"])->name('config.store');
}); // this should be the absolute last line of this file
