<?php

use Illuminate\Support\Facades\Route;
use Modules\Panel\Http\Controllers\Auth\MemberController;
use Modules\Panel\Http\Controllers\PanelController;

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
// Rute untuk Login dan Autentikasi


Route::group(['prefix' => 'panel', 'middleware' => 'guest'], function () {
    Route::get('login', [PanelController::class, 'pageLogin'])->name('login');
    // Route::post('login', [AuthController::class, 'login'])->name('login.post');
});

Route::group(['prefix' => 'panel', 'middleware' => ['auth','MenuMiddleware']], function () {
    Route::get('/', [PanelController::class, 'index'])->name('/');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('logout', [MemberController::class, 'logout'])->name('auth.logout');
    Route::post('do_login', [MemberController::class, 'do_login'])->name('auth.do_login');
});
