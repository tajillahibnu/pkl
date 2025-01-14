<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Panel\Http\Controllers\ComboMasterController;
use Modules\Panel\Http\Controllers\Setting\SekolahController;

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

// Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
//     Route::get('management', fn (Request $request) => $request->user())->name('management');
// });


Route::group(['prefix' => 'setting/app', 'middleware' => ['web', 'auth']], function () {
    Route::post('read', [SekolahController::class, 'read'])->name('read');
    Route::post('update', [SekolahController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'setting/sekolah', 'middleware' => ['web', 'auth']], function () {
    Route::post('read', [SekolahController::class, 'read'])->name('read');
    Route::post('update', [SekolahController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'setting/sekolah', 'middleware' => ['web', 'auth']], function () {
    Route::post('combo/{tipe}', [ComboMasterController::class, 'combo'])->name('combo');
});