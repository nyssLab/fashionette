<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'shows', 'middleware' => 'api'], function () {
    Route::get(
        '/',
        [\App\Http\Controllers\TvShowController::class, 'index']
    )->name('index');

    Route::get(
        'search',
        [\App\Http\Controllers\TvShowController::class, 'search']
    )->name('search');

    Route::get(
        '{id}',
        [\App\Http\Controllers\TvShowController::class, 'show']
    )->name('show')->where(['id' => '[0-9]+']);

});

Route::group(['middleware' => 'api'], function () {
    Route::any('{any}', function () {
        abort(404);
    });
});
