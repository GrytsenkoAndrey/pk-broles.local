<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])
    ->prefix('student')
    ->name('student.')
    ->group(function () {
        Route::get('timetable', [App\Http\Controllers\Student\TimetableController::class, 'index'])
            ->name('timetable');
        Route::get('fake', [App\Http\Controllers\Student\TimetableController::class, 'fake'])
            ->name('fake');
    });
