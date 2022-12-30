<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
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

Route::middleware('throttle:global')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::controller(GuestController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });
    });

    Route::middleware('auth')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });

        Route::middleware('verified')->group(function () {
            Route::resources([
                'employees' => EmployeeController::class,
            ]);
        });
    });
});