<?php

use Illuminate\Support\Facades\Route;
use Modules\Panel\Http\Controllers\Page\MenuController;
use Modules\Panel\Http\Controllers\PanelController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

// Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
//     Route::apiResource('panel', PanelController::class)->names('panel');
// });
Route::group(['prefix' => 'panel', 'middleware' => ['web', 'auth','PageContent']], function () {
    Route::post('load-page', [MenuController::class, 'getMenuPage'])->name('load-page');
});
// Route::post('switch-role', [PageController::class, 'switchModule'])->name('switch-role');
// require_once(__DIR__ . '/api/management/user.php');