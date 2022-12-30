<?php

use App\Http\Controllers\API\APIController;
use App\Http\Controllers\API\AuthController;
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
Route::prefix('v1')->group(function () {
    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });

    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
    });

    Route::controller(APIController::class)->name('api.')->group(function () {
        Route::post('positions', 'positions')->name('positions');
        Route::post('hubs', 'hubs')->name('hubs');
        Route::post('divisions', 'divisions')->name('divisions');
        Route::post('salaries', 'salaries')->name('salaries');
        Route::post('workdays', 'workdays')->name('workdays');
    });
});